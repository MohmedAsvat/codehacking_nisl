<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;


use App\Post;
use App\Comment;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments=Comment::paginate(5);
        return view('admin.comments.index',compact('comments'));
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
    public function store(Request $request)
    {
        //
        $user=Auth::user();

        $data= [
            'post_id' =>$request->post_id,
            'author'  =>$user->name,
            'email'   =>$user->email,
            'photo'   =>$user->photo->file,
            'body'    =>$request->body,
        ];

        Comment::create($data);

        $request->session()->flash('comment_msg','Your Comment has been submitted and Waiting for response');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $comment=Comment::findOrFail($id);
        // return view('admin.comments.show',compact('comment'));  
        //
        $post=Post::findOrFail($id);
        // $comments=Comment::findOrFail($post->id);
        $comments=$post->comments;

        return view('admin.comments.show', compact('comments'));
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

        Comment::findOrFail($id)->update($request->all());
        
        return redirect('/admin/comments');
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
        Comment::findOrFail($id)->delete();
        return redirect('/admin/comments');
    }
}
