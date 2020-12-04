<?php

namespace App\Http\Controllers\Frontend;

use App\models\Video;

class SkillController extends FrontendController
{
    public  function index($id){
        $videos=Video::whereHas('skills',function ($query) use ($id){
            $query->where('skill_id',$id);
        })->latest()->get();
        return view('Frontend.skills.home',compact('videos'));

    }//end of index
}//end of controller
