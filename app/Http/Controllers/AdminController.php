<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addDoctorView(){
        if (Auth::id()) {
            return view('admin.add_doctor');
        }else {
            return redirect()->back();
        }
        
    }
    public function addDoctor(Request $request){
        $doctor = new Doctor;
        $image=$request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move('doctorImage', $imageName);
        $doctor->image = $imageName;

        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->address = $request->address;
        $doctor->phone = $request->phone;
        $doctor->specialization = $request->specialization;
        $doctor->save();

        return redirect()->back()->with('message','Doctor added successfully');
        
    }

    public function doctorList(){
        if (Auth::id()) {
            if (Auth::user()->user_type==1) {
                $doctors = Doctor::all();
                return view('admin.doctor_list', compact('doctors'));
            }else {
                return redirect()->back();
            }
        }else {
            return redirect('/login');
        }

    }
    public function editDoctor($id){
        if (Auth::id()) {
            if (Auth::user()->user_type==1) {
                $data = Doctor::find($id);
                return view('admin.edit_doctor',compact('data'));
            }else {
                return redirect()->back();
            }
        }else {
            return redirect('/login');
        }
         
    }
    public function updateDoctor(Request $request, $id){
        $doctor = Doctor::find($id);
            $doctor->name=$request->name;
            $doctor->email=$request->email;
            $doctor->address=$request->address;
            $doctor->phone=$request->phone;
            $doctor->specialization=$request->specialization;
            $image=$request->file('image');

            if ($image) {
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move('doctorImage', $imageName);
                $doctor->image = $imageName;
            }

            $doctor->save();

        return redirect()->back()->with('message','Doctor updated successfully');
    }
    public function deleteDoctor($id){
        Doctor::find($id)->delete();
        return redirect()->back()->with('message','Doctor removed successfully');
    }
    public function appointment(){
        if (Auth::id()) {
            if (Auth::user()->user_type==1) {
                $data = Appointment::all();
                return view('admin.appointment',compact('data'));
            }else {
                return redirect()->back();
            }
        }else {
            return redirect('/login');
        }
        
    }
    public function approve($id){
        $data = Appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back()->with('message','This appointment has been approved');
    }
    public function decline($id){
        $data = Appointment::find($id);
        $data->status = 'Declined';
        $data->save();
        return redirect()->back()->with('message','This appointment has been declined');
    }
}
