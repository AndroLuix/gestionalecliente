<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class HomeController
{
    public function login(Request $request)
    {
        $dati = $request->all();
        $pageLogin = 'login';

        $email = $request->input('email');
        $passwordUtente = $request->input('password');

        if (!isset($dati['login'])) {
            return view('login');
        } else {
            $utenti = DB::select('select indirizzo_email, password from utente');

            if (count($utenti) > 0) {
                foreach ($utenti as $u) {
                    if ($u->indirizzo_email == $email && $u->password == $passwordUtente) {

                        // La combinazione email/password corrisponde a un utente nel database
                        return Redirect::to('home');
                    }
                }
            }

            // La combinazione email/password non corrisponde a nessun utente nel database
            $messaggio = "Email o Password errata";
            return View::make('login', compact('pageLogin', 'messaggio'));
        }
    }

    public function home(Request $request) {
        $page = 'home';
        $cliente = DB::table('cliente')->select('id', 'codice', 'nome', 'cognome', 'email', 'telefono', 'piva')->orderBy('id')->get();


        return View::make('home', compact('page', 'cliente'));
    }

    public function salvaCliente(Request $request) {
        $dati = $request->only(['codice', 'nome', 'cognome', 'email', 'telefono', 'piva']);
        DB::table('cliente')->insert($dati);
        return redirect()->back();
    }
}
