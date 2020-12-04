<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Users\Store;
use App\Http\Requests\Dashboard\Users\Update;
use App\models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends DashboardController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }//end of construct



    public function store(Store $request)
    {
        $all_data=$request->all();
        $all_data['password']=Hash::make($all_data['password']);
         User::create($all_data);
        return redirect()->route('users.index');
    }//end of store


    public function show(User $user)
    {

    }//end of show

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
        return redirect()->route('users.index');
    }//end of update




}//end of controller
