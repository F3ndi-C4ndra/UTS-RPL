<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\booking;

class BookingController extends Controller
{
    public function index(){
        $bookings = booking::all();
        return view('bookings.index',['bookings'=>$bookings]);
        }
        public function destroy($id){   
            $booking = booking::find($id);
            $booking ->delete();
            return redirect( route('booking.index'))->with ( 'success', 'booking Delete successfully' );
            
            }
        
        
        public function create(){
            return view('bookings.create');
            }
            public function edit($id)
            {
                $booking = booking::findOrFail($id);
                return view('bookings.edit', compact('booking'));
            }
            public function update(Request $request, $id)
{
    $booking = booking::findOrFail($id);
    $data = $request->validate([
        'name' => 'required',
        'qty' => 'required|numeric',
        'price' => 'required|decimal:0,2',
        'description' => 'nullable',
    ]); 
    $booking->update($data); 

    return redirect(route('booking.index'))->with('success', 'booking updated successfully');
}

            public function store(Request $request){
                $data = $request->validate([
                    'name' => 'required',
                    'qty' => 'required|numeric',
                    'price' => 'required|decimal:0,2',
                    'description' => 'nullable',
                ]);
                $newbooking = booking::create($data);
                return redirect(route('booking.index'));
                booking::create($validateddata);
            }
                }
