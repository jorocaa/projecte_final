<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $inforeserva = Reservation::get()->where('id',$request->idreservation)->first();

        $details =[
            'title' => 'RESERVA REALITZADA',
            'body' => 'Hola ' . Auth::user()->username . '. Ha realitzat una reserva a' . $inforeserva->namecompany . '. El correu de contacte per a futures referències és '.$inforeserva->reservationlink.'. Gràcies'
        ];

        Mail::to(Auth::user()->email)->send(new TestMail($details)); // CANVIAR A AUTH:USER()->MAIL QUAN FUNCIONI
        return redirect()->back()->with('success', 'MAIL ENVIAT, REVISI LA SEVA SAFATA D ENTRADA');
    }
}
