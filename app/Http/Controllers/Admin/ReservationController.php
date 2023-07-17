<?php

namespace App\Http\Controllers\Admin;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    function index()  {
        return view('frontend.reservation');
    }

    function show() {
        $reservation = Reservation::all();
        return view('admin.reservation.adminreservation',compact('reservation'));
    }

        public function store(Request $request)
    {
        $reservation = new Reservation;
     
        $reservation->time = $request->time;
        $reservation->email = $request->email;
        $reservation->date = $request->date;
        $reservation->guests = $request->guests;
        $reservation->name = $request->name;
        $reservation->phone = $request->phone;
        $reservation->message = $request->message;

        $reservation->save();
        $send = Mail::send('mail', array(
            'email' => $request->get('email'),
            'time' => $request->get('time'),
            'date' => $request->get('date'),
            'guests' => $request->get('guests'),
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('maherfared@gmail.com', 'Admin')->subject('New Reservation Message From Rayan Website');
            
            
        });
        if($send){
            return back()->with('message', 'We have received your message and would like to thank you for writing to us.');
        }else {
            return back()->with('message', 'some thing wrong.');

        }


    }


    function edit($reservation_id) {
        $reservation = Reservation::find($reservation_id);
        return view('admin.reservation.reservation_edit',compact('reservation'));
    }

    function update(Request $request , $reservation_id)  {
        $reservation = Reservation::find($reservation_id);

        $reservation->status = $request->status;

        $reservation->update();
        return redirect('admin/reservation')->with('message', 'Status Updated Succssfully');
    }

    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->reservation_delete_id);
        if($reservation){
            $reservation->delete();
            return redirect('admin/reservation')->with('message','reservation deleted Successfully');
        }else {
            return redirect('admin/reservation')->with('message','No reservation Id Found');
        }
    }



}

