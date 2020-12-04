<?php

namespace App\Http\Controllers;

use App\Http\Requests\Frontend\messages\store;
use App\models\Comment;
use App\models\Message;
use App\models\Tag;
use App\models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(request $request)
    {
        $videos=Video::when($request->search,function ($q) use ($request){
            return $q->where('name','like','%'.$request->search.'%');
        })->latest()->paginate(9);
       $search=$request->search;
        $videosCount=Video::count();
        $commentsCount=Comment::count();
        $tagsCount=Tag::count();

        return view('Frontend.home',compact('videos','videosCount','commentsCount','tagsCount','search'));
    }//end of index


    public function message(store $request){
        Message::create($request->all());
        session()->flash('success','message has been sent successfully');
        return redirect()->route('home');
    }// end of message

}// end of controller
