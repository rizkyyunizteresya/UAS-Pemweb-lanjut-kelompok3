<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Options;

use App\Models\Booking;

use App\Models\Contact;

class HomeController extends Controller
{
    public function detail($id)
    {
        $option = Options::find($id);

        return view('home.detail', compact('option'));
    }

    public function add_booking(Request $request, $id)
    {
        $data = new Booking;

        $data->option_id = $id;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->start = $request->start;
        $data->end = $request->end;

        $data->save();

        return redirect()->back()->with('message', ' Your Booking Appointment has Success');
    }

    public function contact(Request $request)

    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('message', ' Your Message has been Sent');
    }
}
