<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect(){
        if (Auth::id()) {
            if (Auth::user()->user_type=='0') {
                $doctors = Doctor::all();
                return view('user.index',compact('doctors'));
            }else {
                return view('admin.index');
            }
        }else {
            return redirect()->back();
        }
    }
    public function index(){
        if (Auth::id()) {
            return redirect()->back();
        }else {
        $doctors = Doctor::all();
        return view('user.index',compact('doctors'));
        }
    }
    public function show(){
        if (Auth::id()) {
            if (Auth::user()->user_type=='0') {
                $userId = Auth::user()->id;
                $appoint = Appointment::all()->where('user_id',$userId);
                return view('user.my_appointment',compact('appoint'));
            }else {
                return redirect()->back();
            }
        }else {
            return redirect('/login');
        }
    }
    public function appointment(Request $request){
    if (Auth::id()) {
        $data = new Appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->message = $request->message;
        $data->status = 'In Progress';
        $data->user_id = Auth::user()->id;
        $data->save();
        return redirect('my_appointment')->with('message','Your appointment was successfully submitted. You will get a response from us soon.');
    }else {
        return redirect('register');
    }
    }
    public function cancel($id){
        Appointment::find($id)->delete();
        return redirect()->back()->with('message','This appointment has been successfully cancelled');
    }
}
