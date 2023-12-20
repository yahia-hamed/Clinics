<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    function index(){
        $majors=Major::paginate(15);
        return view('Major.index',compact('majors'));
    }
    function destroy($id){
        $majors=Major::find($id);
        $majors->delete();
        return redirect()->route('major.index');

    }
    function edit(major $majors, $id){
        $majors=Major::find($id);
        return view('major.update',compact('majors'));
    }
    function update(Request $request,string $id){
        $majors= Major::where('id',$id)->update([
            'title'=>request()->title,
        ]);
        return redirect()->route('major.index');
    }
    function create(){
        return view('major.create');
    }
    function store(Request $request){
        Major::create($request->all());
        return redirect()->route('major.index');
    }
}
