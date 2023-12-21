<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DoctorController extends Controller
{
    function index(){
        $doctors=Doctor::paginate(10);
        return view('Doctor.index',compact('doctors'));
    }
    function destroy($id){
        $doctors=Doctor::find($id);
        $doctors->delete();
        return redirect()->route('doctor.index');

    }
    function edit(Doctor $doctors, $id){
        $doctors=Doctor::find($id);
        return view('Doctor.update',compact('doctors'));
    }
    function update(Request $request,string $id){
        $doctors=Doctor::where('id',$id)->update([
            // 'major_id'=>request()->major_id,
            'name'=>request()->name,
            'email'=>request()->email,
            'password'=>request()->password,
            'phone'=>request()->phone,
            'city'=>request()->city,
        ]);
        // dd(request()->password);

        return redirect()->route('doctor.index');
    }
    function show(Doctor $doctors,$id){
        $doctors=Doctor::find($id);
        return view('doctor.show',compact('doctors'));
    }
    function create(){
        $majors=Major::get();
        return view('Doctor.create',compact('majors'));
    }
    function store(Request $request){
        $data=$request->all();
        $path=$request->file('image')->store('public');
        $path=str_replace('public','storage',$path);
        $data['image']=$path;
        // dd($data);

        Doctor::create($data);
        return redirect()->route('doctor.index');
    }
}
