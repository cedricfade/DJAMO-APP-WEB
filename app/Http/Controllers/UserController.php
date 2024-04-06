<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use App\Models\User;
use App\Services\OTPService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


    class UserController extends Controller
    {

        /**
         * Page de connexion
         */
        public function login(){
            if (Auth::user()) {
                return "DEJA CONNECTE";
            }
            else

            return view('pages.login');
        }

        /**
         * Page de creation de compte annonyme et fonctionalité
         */

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

        /**
         * Fonctionlaité de connexion des Utilisateurs
         */

        public function loginAction(Request $request){

            $request->validate([
                'email'=>['required'],
            ]);
            $email = $request->input('email');

        /**
         *  Vérifiez si l'e-mail existe dans la base de donnée
         */

            $user = User::where('email', $email)->first();


            /**
             * Verification des informations email et mot de passe
             */

            if ($user) {

                // L'e-mail existe, enregistrer l'utilisateur dans la session
                Session::put('user', $user);

                // L'e-mail existe, redirigez l'utilisateur vers la page de vérification du mot de passe
                return redirect()->route('codePIN');
            }

            else {
                // Si L'e-mail n'existe pas, renvoyez un message d'erreur ou redirigez l'utilisateur vers une autre page
                return redirect()->back()->with('errorEmail', 'Email incorrecte ou n\'existe pas.');
            }
        }

        /**
         * Page d'insertion de code PIN
         */

        public function codepin(){
            if (Auth::user()) {
                return 'DEJA CONNECTE';
            }
            else{
                if (!Session('user')) {
                    return Redirect()->route('login');
                }
                else{
                    return view('pages.codePin');
                }
            }




        }

         /**
         * Page d'insertion de code PIN
         */

        public function codepinAction(Request $request){
            //On recuperer l'email enreistré dans la SESSION pour inserer dans la variable $email
            $email = session('user')->email;

            //On recupere le codePin entré par l'utilisateur pour verifier avec le password de l'utilisateur existant dans la Base de donnée
            $pass = $request->password;

            $user = User::where('email', $email)->first();



            // On verifie encore si l'utilisateur existe et on compare son mot de passe
            if ($user) {
                // Récupérer le nombre de tentatives à partir de la session
                $loginAttempts = Session::get('loginAttempts', 0);

                // Vérifier si le nombre de tentatives dépasse 3
                if ($loginAttempts >= 3) {
                    // Rediriger l'utilisateur vers une page de blocage ou un autre emplacement approprié
                    return redirect()->route('login');

                }

                // Vérifier si le mot de passe est correct
                if (Hash::check($pass, $user->password)) {
                    // Réinitialiser le nombre de tentatives après une connexion réussie
                    Session::forget('loginAttempts');

                    // Placer votre logique de génération de code OTP et de redirection vers la vérification OTP ici
                    // On génère un code OTP et on le stocke dans une session
                    $otp = OTPService::generateOTP($user);
                    Session::put('otp', $otp);
                    Session::put('pass',$pass);

                    return redirect()->route('verifyOTP');
                } else {
                    // Incrémenter le nombre de tentatives
                    $loginAttempts++;
                    Session::put('loginAttempts', $loginAttempts);

                    return redirect()->back()->with('error', 'Code pin incorrecte.');
                }
            } else {
                return redirect()->route('login');
            }


            // // Tentez de connecter l'utilisateur avec les informations fournies
            // if (Auth::attempt(['email'=>$email, 'password'=>$pass])) {
            //     // Authentification réussie, redirigez l'utilisateur vers son tableau de bord
            //     return "VALIDER";
            // } else {
            //     // Authentification échouée, renvoyez un message d'erreur ou redirigez l'utilisateur vers une autre page
            //     return redirect()->back()->with('error', 'Code pin incorrecte.');
            // }
        }

        /**
         * Page de verification OTP (l'email de confirmation qui sera encoyé a l'utilisateur)
         */

        public function verifyOTP(){

        if (Auth::user()) {
            return 'DEJA CONNECTE';
        }
        else{
            if (!Session('pass')) {
                return Redirect()->route('codePIN');
            }
            else{
                return view('pages.verifyOTP');
            }
        }



        }


        public function verifyOTPAction(Request $request){
            $email = session('user')->email;
            $pass = session('pass');
            $otp = $request->otp;

            if (session('otp') === $otp) {

        // Tentez de connecter l'utilisateur avec les informations fournies
            if (Auth::attempt(['email'=>$email, 'password'=>$pass])) {
        // Authentification réussie, redirigez l'utilisateur vers son tableau de bord
                return "VALIDER";
            } else {
        // Authentification échouée, renvoyez un message d'erreur ou redirigez l'utilisateur vers une autre page
                return redirect()->back();
            }

            }
            else{
                return redirect()->back()->with('errorOTP', 'Code de validation incorrecte.');
            }






        }


    }
