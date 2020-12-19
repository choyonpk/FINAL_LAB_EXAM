<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employee;

class adminController extends Controller
{
    public function create()
    {
        return view('admin.home.create');
    }
    public function index()
    {
        return view('admin.home.index');
    }
    public function addemployee(request $req)
    {
        $user = new employee();
        $user->username     = $req->uname;
        $user->pass   = $req->pass;
        $user->name         = $req->name;
        $user->contact         = $req->contact;             
        $user->type         = "e";
        if($user->save())
        {
            return redirect()->route('admin.home.employeelist');
        }
        else
        {
            return back();
        }
    }
    public function employeelist(){
        $users = employee::all();
        return view('admin.home.employeelist')->with('users', $users);
    }
    public function edit($id){
        $users = employee::find($id)->get();
         return view('admin.home.edit')->with('users', $users[0]);
    }
}
