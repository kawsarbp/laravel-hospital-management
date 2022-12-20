<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function League\Flysystem\move;
use function Symfony\Component\Console\Style\success;
use function Termwind\renderUsing;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::orderBy('id', 'desc')->get();
//        return $doctors;
        return view('admin.doctor.manage', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'speciality' => 'required',
            'room' => 'required',
            'photo' => 'required',
        ]);
        $file = $request->file('photo');
        $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
        $doctor = Doctor::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'speciality' => $request->speciality,
            'room' => $request->room,
            'photo' => $file_name,
        ]);
        if ($doctor) {
            $file->move('uploads/doctors', $file_name);
        }
        return redirect()->back()->with(['type' => 'success', 'message' => 'doctor add success']);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'speciality' => 'required',
            'room' => 'required',
//            'photo' => 'required',
        ]);

       

        $doctor = Doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;

        $old_photo = $doctor->photo;

        $file = $request->file('photo');
        if ($file == null) {
            $doctor->photo = $old_photo;
        } else {
//            $file = $request->file('photo');
            if ($file) {
                $file_name = uniqid() . date('dmyhis.') . $file->getClientOriginalExtension();
                $doctor->photo = $file_name;
                $file->move('uploads/doctors', $file_name);
                File::delete(public_path('/uploads/doctors/'.$old_photo));
            }
        }

        $doctor->save();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Doctor update Success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Doctor $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $originalPath = getcwd() . "/uploads/doctors/{$doctor->photo}";
        if (File::exists($originalPath)) {
            File::delete($originalPath);
        }
        $doctor->delete();
        return redirect()->back()->with(['type' => 'success', 'message' => 'Doctor Delete Success']);
    }
}
