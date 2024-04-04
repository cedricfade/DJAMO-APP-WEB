<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function login(){

        return view('pages.login');
    }

    public function create(){

        return view('pages.create');
    }

    public function createAction(Request $request){

        $validatedData = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'contact'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confirmPassword'=>'required|same:password'

        ]);

        $user = new User();
        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->contact = $request->contact;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->status = 1;
        $user->save();


    }


    public function loginAction(Request $request){

        $request->validate([
            'email'=>['required'],
        ]);
        $email = $request->input('email');


         // Vérifiez si l'e-mail existe dans la base de données
         $user = User::where('email', $email)->first();

          /**
         * Verification des information email et mot de passe
         */

         if ($user) {
            // L'e-mail existe, redirigez l'utilisateur vers la page de vérification du mot de passe
            // L'e-mail existe, enregistrer l'utilisateur dans la session
    Session::put('user', $user);

            return redirect()->route('codePIN');
        } else {
            // L'e-mail n'existe pas, renvoyez un message d'erreur ou redirigez l'utilisateur vers une autre page
            return redirect()->back()->with('error', 'L\'e-mail n\'existe pas.');
        }
    }

        public function codepin(){


            return view('pages.codePin');
        }

    public function codepinAction(Request $request){
        $email = session('user')->email;
        $pass = $request->password;
        $credentials = $request->only($email, $pass);
        // $session = session('user');
        // $pass = $request->password;

          // Tentez de connecter l'utilisateur avec les informations fournies
          if (Auth::attempt(['email'=>$email, 'password'=>$pass])) {
            // Authentification réussie, redirigez l'utilisateur vers son tableau de bord
            return "VALIDER";
        } else {
            // Authentification échouée, renvoyez un message d'erreur ou redirigez l'utilisateur vers une autre page
            return redirect()->back()->with('error', 'Code pin incorrecte.');
        }
    }
}
