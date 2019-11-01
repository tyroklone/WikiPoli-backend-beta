<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Traits\HasError;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller {

    use HasError;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('users.post.index');
    }

    public function create(Request $request) {
        $input = $request->all();
        $rules = [
            'title' => ['required', 'string', 'unique:posts'],
            'body' => 'required'
        ];


        $error = static::getErrorMessage($input, $rules);
        if ($error) {
            return $error;
        }
        $input['status'] = 0;
        $input['author_id'] = Auth::user()->id;
        $title = $request->title;
          $input['slug'] = $this->makeSlug($title);
        Post::create($input);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', 'Post  Successfully Added , Waiting For Review');
        return Redirect::back();
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
     
    public function draft(Request $request) {

        dd('todo');
    }

}
