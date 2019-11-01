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

}
