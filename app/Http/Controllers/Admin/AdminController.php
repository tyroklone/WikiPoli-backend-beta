<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Post;

class AdminController extends Controller {

    public function index() {
        $data['recents'] = Post::where('created_at', '>=', \Carbon\Carbon::now()->subDay())->count();
        $data['posts'] = Post::count();
        $data['users'] = User::count();
        return view('admin.home', $data);
    }

    // Method to show all pending posts
    public function pendingPosts()
    {
     try {
         $pending = [];
         $posts = Posts::all();
         foreach($posts as $post)
         {
          if($post->status == 0)
          {
           array_push($pending, $post);
          }
         }
  
         if(empty($pending))
         {
          $res['status'] = false;
          $res['status_code'] = 404;
          $res['message'] = "No Pending Posts Found!";
   
          return response()->json($res, $res['status_code']);
         }
          else
         {
          $res['status'] = true;
          $res['status_code'] = 200;
          $res['message'] = "Pending Posts Found!";
          $res['pending_posts'] = $pending;
   
          return response()->json($res, $res['status_code']);
         }
        }
         catch (\Exception $e)
        {
         $res['status_code'] = 501;
         $res['message'] = 'An Unexpected Error Occured!';
         $res['error'] = $e->getMessage();
          
         return response()->json($res, $res['status_code']);
        }
    }
    
    public function postGet() {
        $filter = Request()->filter;
        if ($filter == 'approved') {
            $data['posts'] = Post::whereStatus(1)->orderBy('created_at', 'desc')->paginate(15);
        } elseif ($filter == 'unapproved') {
            $data['posts'] = Post::whereStatus(0)->orderBy('created_at', 'desc')->paginate(15);
        } elseif ($filter == 'soft') {
            $data['posts'] = Post::onlyTrashed()->orderBy('created_at', 'desc')->paginate(15);
        } else {
            $data['posts'] = Post::orderBy('created_at', 'desc')->paginate(15);
        }

        return view('admin.post.index', $data);
    }

    public function approve($id) {
        $post = Post::find($id);
        $post->update([
            'status' => 1
        ]);

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Successfully Approved");
        return back();
    }

    public function unapprove($id) {
        $post = Post::find($id);
        $post->update([
            'status' => 0
        ]);

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Unpproved");
        return back();
    }

    public function deleteTemporary($id) {
        $post = Post::find($id);
        $post->delete();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Soft Deleted");
        return back();
    }

    public function deletePermanently($id) {
        $post = Post::find($id);
        $post->forceDelete();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Hard Deleted");
        return back();
    }

    public function restore($id) {
        Post::where('id', $id)->restore();

        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Post Restore");
        return back();
    }

    //users
    public function userGet() {
        $filter = Request()->filter;
        if ($filter == 'blocked') {
            $data['users'] = User::with(["user_statuses" => function($q) {
                            $q->where('user_statuses.status', '=', 'blocked');
                        }])->orderBy('created_at', 'DESC')->with('user_statuses')->paginate(15);
        } elseif ($filter == 'soft') {
            $data['users'] = User::onlyTrashed()->with('user_statuses')->orderBy('created_at', 'desc')->paginate(15);
        } else {
            $data['users'] = User::with('user_statuses')->orderBy('created_at', 'desc')->paginate(15);
        }

        return view('admin.user.index', $data);
    }

}
