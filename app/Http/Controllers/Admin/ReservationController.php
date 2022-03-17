<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\reservation;
use DateTime;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create()
    {
        $reservation = new Reservation();
        $now = new DateTime();
        $reservation->date =  $now->format('Y-m-d');
        $reservation->heure = $now->format('H:i-');


    
        return view('admin.reservation.create', [
            'reservation' => $reservation,
            'now' =>$now,

        ]);
    }

    public function store(Request $request)
    {
        $today = new DateTime();
        // ont fixe les heures et les minutes a zero
        $today->setTime(0, 0);
        //dump($request->all());

        $request->validate([
            $validated = $request->validate([
            // interdiction d'utiliser des chiffres 'not_regex:/[0-9]+/'
            'nom'=>['required', 'min:1', 'max:190','not_regex:/[0-9]+/'],
            // obligation d'utiliser des chiffrs, parenthèses, des plus ou des espaces 'regex:/^\+?[0-9() ]+$/'
            'tel'=>['required', 'max:190','regex:/^\+?[0-9() ]+$/'],
            // @fixme dans le message d'erreur, le mot clé today n'est pas traduit
            // @fixme date non valide, utiliser DateTime::seTime()
            // 'date'=>['required', 'max:190','after_or_equal:now'],
            'date'=>['required', 'max:190','after_or_equal:'.$today->format('Y-m-d')],
            'heure' =>['required'],
            'couvert' =>['required', 'integer','between:1,12'],
            // @todo commentaires, uyiliser nullable
            'commentaires' =>['nullable', 'max:500'],
            'confirmation'=>['required', 'in:0,1,2'],

            ]);

        $dump($validated);
        $reservation = new reservation();
        $reservation->nom = $validated['nom'];
        $reservation->tel = $validated['tel'];
        $reservation->date = $validated['date'];
        $reservation->heure = $validated['heure'];
        if (empty($validated['commentaires'])){}
        $reservation->commentaire = $validated['commentaires];
        if '$validated['confirmation'] == '0') {
            $reservation->confirmation = null;
        }elseif ($validated['confirmation'] == '1'){
            $reservation->confirmation = true;
        }else{
            $reservation->confirmation = false;
        }
        
        
    }

}