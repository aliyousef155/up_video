<?php

namespace App\Http\Controllers\Frontend;



use App\models\Video;

class CategoryController extends FrontendController
{
    public  function index($id){
        $videos=Video::select()->where('cat_id', $id)->latest()->get();
        return view('Frontend.categories.home',compact('videos'));

    }//end of index

}//end of controller
