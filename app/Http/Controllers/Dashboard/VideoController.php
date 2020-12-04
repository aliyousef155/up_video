<?php

namespace App\Http\Controllers\Dashboard;


use App\Http\Requests\Dashboard\Videos\store;
use App\Http\Requests\Dashboard\Videos\update;
use App\models\Category;
use App\models\Comment;
use App\models\Skill;
use App\models\Tag;
use App\models\Video;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VideoController extends DashboardController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }//end of construct

    public function create()
    {
        $tags=Tag::all();
        $skills=Skill::all();
        $categories=Category::all();
        return view('Dashboard.'.$this->getClassNmeFromModel().'.create',compact('categories','skills','tags'));
    }//end of create
    public function store(store $request)
    {
        $file=$request->file('image');
        $fileName=time().rand(1,1000000).$file->getClientOriginalName();
        $file->move(public_path('uploads'),$fileName);

        $video_request=$request->except(['skills','tags','image'])+['user_id'=>auth()->user()->id,'image'=>$fileName];
        $video=Video::create($video_request);

        if (isset($request->skills)&&!empty($request->skills)){
            $video->skills()->sync($request->skills);
        }//end if
         if (isset($request->tags)&&!empty($request->tags)){
            $video->tags()->sync($request->tags);
        }//end if
        return redirect()->route('video.index');
    }//end of store

    public function edit($id)
    {
        $skills=Skill::all();
        $tags=Tag::all();
        $categories=Category::all();
        $row=$this->model->FindOrFail($id);
        $comments=$row->comments()->with('user')->latest()->get();
        $selected_tags=$row->tags()->get()->pluck('id')->toArray();
        $selected_skills=$row->skills()->get()->pluck('id')->toArray();
        return view('Dashboard.'.$this->getClassNmeFromModel().'.edit',compact('row','categories','skills','selected_skills','tags','selected_tags','comments'));
    }//end of edit

    public function update(update $request, Video $video)
    {
        File::delete(public_path('uploads/'.$video->image));

        $file=$request->file('image');
        $fileName=time().rand(1,1000000).$file->getClientOriginalName();
        $file->move(public_path('uploads'),$fileName);

        $video_request=$request->except(['skills','tags','image'])+['user_id'=>auth()->user()->id,'image'=>$fileName];

        $video->update($video_request);

        if (isset($request->skills)&&!empty($request->skills)){
            $video->skills()->sync($request->skills);
        }//end if
   if (isset($request->tags)&&!empty($request->tags)){
            $video->tags()->sync($request->tags);
        }//end if

        return redirect()->route('video.index');
    }//end of update
    ///////////////////////////////////////
    /// comments function

    public function storeComment(\App\Http\Requests\Dashboard\comments\store $request){
    Comment::create($request->all()+['user_id'=>auth()->user()->id]);
        return redirect()->route('video.index');
    }//end of store comment

    public  function destroyComment(Comment $comment){
        $comment->delete();
        return redirect()->route('video.index');
    }// end of delete



    public  function updateComment(Request $request,Comment $comment){

        $comment->update($request->all());
        return redirect()->back();
    }// end of edit

}//end of controller
