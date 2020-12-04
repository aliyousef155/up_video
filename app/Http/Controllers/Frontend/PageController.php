<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\models\Page;
use Illuminate\Http\Request;

class PageController extends FrontendController
{
    public  function index(Page $page){

        return view('Frontend.pages.home',compact('page'));

    }// end of index


}//end of controller
