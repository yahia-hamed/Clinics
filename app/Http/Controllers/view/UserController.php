<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    function index(){
        $users=User::paginate(15);
        return view('User.index',compact('users'));
    }
    function destroy($id){
        $users=User::find($id);
        $users->delete();
        return redirect()->route('user.index');
    }
    function create(){
        return view('User.create');
    }
    function store(Request $request){
        $data=$request->all();
        $path=$request->file('image')->store('public');
        $path=str_replace('public','storage',$path);
        $data['image']=$path;
        User::create($data);
        return redirect()->route('user.index');
    }
    function show($id){
        $users=User::find($id);
        return view('User.show',compact('users'));
    }
}
