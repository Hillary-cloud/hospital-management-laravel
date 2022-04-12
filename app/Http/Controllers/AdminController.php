<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class AdminController extends Controller
{
    public function addDoctorView(){
        return view('admin.add_doctor');
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
        $doctors = Doctor::all();
        return view('admin.doctor_list', compact('doctors'));
    }
    public function editDoctor($id){
        $data = Doctor::find($id);
        return view('admin.edit_doctor',compact('data')); 
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
}
