<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{

    public function index()
    {
       $users= User::paginate(10);
        return response()->json($users);
    }//end of index


    public function create( )
    {

    }//end of create


    public function store(Request $request)
    {
        User::create($request->all());
        return 'user created successfully';
    }//end of store


    public function show(User $user)
    {
        return response()->json($user);
    }//end of show


    public function edit(User $user)
    {
        //
    }//end of edit


    public function update(Request $request, User $user)
    {
        $user->update($request->all());
    }//end of update


    public function destroy(User $user)
    {
    $user->delete();
    }//end of destroy


}//end of controller
