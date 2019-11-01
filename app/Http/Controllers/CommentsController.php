<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// bring in the relationships
use App\Comment;
use App\Posts;
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $postId)
    {
        $data = request()->validate([
            'comment' => 'required|min:5|max:5000'
        ]);

        $comment = new Comment;
        $comment->user = $request->input('user');
        $comment->comment = $request->input('comment');
        $comment->posts_id = $postId;

        $comment->save();
        
        if ($comment->save()) {
            $notification = array(
                'message'    => 'Comment Added Successfully!',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message'    => 'Comment Not Added, Please Try Again!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
