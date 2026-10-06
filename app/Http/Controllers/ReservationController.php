<?php
namespace App\Http\Controllers;
use App\Http\Requests\ReservationRequest;
use App\Models\{Outlet, Reservation};
use Illuminate\Support\Facades\Log;
class ReservationController extends Controller
{
    public function create() { return view('pages.reservation', ['outlets' => Outlet::orderBy('city')->get()]); }
    public function store(ReservationRequest $request)
    {
        $r = Reservation::create($request->validated());
        Log::info('Reservation confirmation email (simulated)', ['to' => $r->email, 'id' => $r->id]); // swap for Mail::to()
        return redirect()->route('reservation')->with('success', "Thank you, {$r->name}. Your table for {$r->guests} is booked on {$r->date->format('D, j M')} at {$r->time}.");
    }
}
