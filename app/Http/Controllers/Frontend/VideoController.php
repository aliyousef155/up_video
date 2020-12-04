<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\comments\store;
use App\models\Comment;
use App\models\Video;
use Illuminate\Http\Request;

class VideoController extends FrontendController
{
    public  function index($id){
        $video=Video::find($id);
        return view('Frontend.video.home',compact('video'));

    }//end of index

    public  function addComment(store $request){
        $data=[
            'comment'=> $request->comment,
            'video_id'=>$request->video_id,
            'user_id'=>auth()->user()->id,
        ];
        Comment::create($data);
        return  redirect()->back();
    }// end of add comment


    public  function editComment(Comment $comment,store $request){
        $comment->update($request->all());
        return  redirect()->back();
    }//end of edit comment
}//end of controller
