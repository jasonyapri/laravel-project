<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    function index()
    {
        $data['users'] = User::all();
        return view('user.list', ['data' => $data]);
    }
    
    //GET
    function addUser()
    {
        return view('user.add');
    }
    
    //POST
    function addUserAction(Request $req)
    {
        User::create($req);
        return $req->input();
    }

    //
    function editUser($id)
    {
        $data['user'] = User::find($id);
        return view('user.edit', ['data' => $data]);
    }
    
    //
    function editUserAction(Request $req, $id)
    {
        $data['user'] = User::find($id);
        $data['user']->update($req->all());

        $msg = "User successfully edited";
        return redirect('/user')->with('msg', $msg);
    }

    //
    function removeUser()
    {
        return view('user.remove');
    }

    function getData()
    {
        return User::all();
    }

    function callApi()
    {
        $data = Http::get("https://reqres.in/api/users?page=1")['data'];
        return view('user.list_api', ['data' => $data]);
    }


}