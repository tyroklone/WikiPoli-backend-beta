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

    public function draft(Request $request) {

        dd('todo');
    }

}
