<?php

namespace App\Http\Controllers\Dashboard;


use App\models\Category;
use App\models\Skill;
use App\models\Tag;
use App\models\Video;

class HomeController extends DashboardController
{

    public function __construct(Category $model)
    {
        parent::__construct($model);
    }//end of construct
    public  function index(){
        $videos=Video::all();
        $skills=Skill::all();
        $categories=Category::all();
        $tags=Tag::all();
        return view('Dashboard.home',compact('videos','categories','skills','tags'));
    }//end of index

}//end of controller
