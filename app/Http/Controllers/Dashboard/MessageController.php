<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\Dashboard\messages\store;
use App\Mail\ReplayContact;
use App\models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends DashboardController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }//end of construct

    public  function replayMessage(store $request,$id){
        $message=Message::findOrFail($id);
        Mail::send(new ReplayContact($message,$request->message));
        return redirect()->back();
    }//end of  replay message

}// end of controller
