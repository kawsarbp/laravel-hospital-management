<?php

namespace App\Http\Controllers;

use App\Mail\DetailsMail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::id()){
            if(Auth::user()->role == '0')
            {
            $user_id = Auth::user()->id;
            $appoint = Appointment::where('user_id',$user_id)->get();
            return view('user.appointment',compact('appoint'));

            }
            return  redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
        }
        Appointment::create([
            'user_id' => $id = isset($id) ? $id : null,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'doctor' => $request->doctor,
            'date' => $request->date,
            'message' => $request->message,
            'status' => 'In Progress',
        ]);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Appointment Register Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $appointments = Appointment::all();
        return view('admin.appointments',compact('appointments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->back()->with(['message'=>'Appointment Cancel Success','type'=>'success']);
    }
    public function approved($id)
    {
        $approved = Appointment::find($id);

        $approved->status = 'Approved';
        $approved->save();
        return redirect()->back()->with(['message'=>'Appointment Approved Success','type'=>'success']);
    }
    public function cancel($id)
    {
        $approved = Appointment::find($id);

        $approved->status = 'Canceled';
        $approved->save();
        return redirect()->back()->with(['message'=>'Appointment Approved Success','type'=>'success']);
    }
    /*email*/
    public function emailView($id)
    {
        $email_id = Appointment::find($id);
        return view('admin.email.email',compact('email_id'));
    }

    public function email(Request $request ,$id)
    {

        $email_find = Appointment::find($id);
        $email = $email_find->email;
        $status = $email_find->status;
        $data = [
            'greeting'=>$request->greeting,
            'subject'=>$request->subject,
            'text'=>$request->message,
            'status'=> $status,
            'email'=>$email
        ];

        $user['to'] = $email;
        $user['subject'] = $data['subject'];
        Mail::send('admin.email.send-mail',$data,function ($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject($user['subject']);
        });
        return redirect()->back()->with(['message'=>'Mail send success','type'=>'success']);
    }

}
