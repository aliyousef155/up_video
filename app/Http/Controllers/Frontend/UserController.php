<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Requests\Dashboard\Users\Update;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends FrontendController
{
    public function index(User $user){
        return view('Frontend.users.profile',compact('user'));
    }//end of index
    public function update(Update $request, User $user)
    {
        $data=$request->except('password');
        if ($request->password !=''){
            $request->validate([
                'password'=>['string','min:5']
            ]);
            $data['password']=Hash::make($request->password);

        }

        $user->update($data);
        return redirect()->back();
    }//end of update


}//end of controller
