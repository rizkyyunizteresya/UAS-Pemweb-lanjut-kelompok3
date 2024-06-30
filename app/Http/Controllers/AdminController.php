<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Options;

use App\Models\Booking;

use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {

        if (Auth::check()) {
            $usertype = Auth::user()->usertype;
            
            if ($usertype == 'user') {
                $option = Options::all();
                return view('home.index', compact('option'));
            } 
            else if ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        } else {
            return redirect('login');
        }

    }
public function home()
{
    $option = Options::all();

    return view('home.index', compact('option'));
}

public function create_option()
{
    return view('admin.create_option');
}

public function add_option(Request $request)
{
    $data = new Options;

    $data->option_title = $request->option_title;

    $data->description = $request->description;

    $data->price = $request->price;

    $image=$request->image;
    if ($image) {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('option', $imagename);
        $data->image= $imagename;
    }

    $data->save();

    return redirect()->back();
}

public function view_option()
{

    $data = Options::all();

    return view('admin.view_option', compact('data'));
}

public function option_delete($id)
{
    $data = Options::find($id); //mencari sesuai id

    $data->delete(); //menghapus

    return redirect()->back(); //kembali

}

public function option_update($id)
{
    $data = Options::find($id); //mencari sesuai id

    return view('admin.option_update', compact('data'));
}

public function option_edit(Request $request, $id)
{
    $data = Options::find($id); //mencari id

    $data->option_title = $request->option_title;

    $data->description = $request->description;

    $data->price = $request->price;

    $image=$request->image;

    if($image)
    {
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('option', $imagename); //gambar baru ditempatkan di option
        $data->image= $imagename;
    }

    $data->save();

    return redirect()->back();
}

public function bookings()
{

    $data=Booking::all();

    return view('admin.booking', compact('data'));
}

public function delete_booking($id)
{
    $data = Booking::find($id); //mencari sesuai id

    $data->delete(); //menghapus

    return redirect()->back(); //kembali

}

public function approve_booking($id)
{
    $booking = Booking::find($id);
    $booking->status='approve';
    $booking->save();
    return redirect()->back()->with('success', 'Booking approved');
}

public function reject_booking($id)
{
    $booking = Booking::find($id);
    $booking->status='rejected';
    $booking->save();
    return redirect()->back()->with('success', 'Booking rejected');
}

public function messages()
{

    $data = Contact::all();

    return view('admin.messages', compact('data'));
}

public function reply($id)
{

    $data = Contact::find($id);

    return view('admin.reply',compact('data'));
}


}
