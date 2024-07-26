<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = User::query()->get();
        return view('welcome', ['users' => $users]);
    }


    public function addUserForm()
    {
        return view('user.add-user'); 
    }

    public function storeUser(Request $request)
    {
        User::query()->create($request->all());
        return redirect('/'); 
    }

    
    public function edit($id)
    {
        $user = User::query()->findOrFail($id);
        return view('user.edit', ['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        if(!$request->password){
            unset($request['password']);
        }

        $user = User::query()->findOrFail($id);
        $user->update($request->all());

        return back();

    }

    public function destroy($id)
    {
        $user = User::query()->findOrFail($id);

        $user->delete();

        return back();
    }


}


