<!DOCTYPE html>
<html lang="FR_fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJAMO LOGIN</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/codepin.css')}}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body style="">

<section class="background">
    <div class="container-fluid">
        <div class="row">

            <div class="col-xl-6 col-md-6 col-lg-6 col-12 djamo-info d-none d-xl-flex d-xl-flex d-md-flex " style="">

                    <div class="item-card" style="border: none;background: none;">

                        <img src="{{asset('assets/images/menu-icon-card.svg')}}" alt="" class="card-targ targ1 animate__animated animate__fadeInRight">
                        <img src="{{asset('assets/images/menu-icon-transfers.svg')}}" alt="" class="card-targ targ2 animate__fadeInUp">
                        <img src="{{asset('assets/images/menu-icon-vault.svg')}}" alt="" class="card-targ targ3 animate__fadeInLeft">

                    </div>
                    <div class="carte-djamo ">
                        <img src="{{ asset('assets/images/djamo_card_small_bgfi.png') }}" alt=""  >


                    </div>





            </div>
            <div class="col-xl-6 col-xl-6 col-md-6 col-lg-6" style="">
                <div class="connexionPIN col-xl-12 col-md-8 col-lg-8 col-sm-8 col-12">
                    <h1 class="">Code de vérification</h1>

                    @if (Session::has('user'))
                    <p style="font-weight: bold; font-size: 18px"><span style="font-style: italic; ">Hello</span>, <span style="color: rgb(51, 51, 207); font-weight: bold; text-transform: uppercase">{{ Session('user')->nom }} {{ Session('user')->prenom }}</span></p>
                    @endif


                    <span>Entrez votre code pour vous connecter</span>

                    @if (Session::has('error'))
                        <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif

                    <form action="{{ route('codePINaction') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3 col-md-12 d-block">
                            <div class="center">


                                <div class="keys col-xl-12 mb-5  @if (Session::has('error'))   animate__animated animate__shakeX   @endif ">
                                    <input type="password" class="input  col-xl-1 col-3 col-md-2 col-lg-2 col-sm-3 " placeholder="*"  value="" style=" @if (Session::has('error')) border: 3px solid rgb(209, 27, 27)   @endif">
                                    <input type="password" class="input  col-xl-1 col-3 col-md-2 col-lg-2 col-sm-3 " placeholder="*"  value="" style=" @if (Session::has('error')) border: 3px solid rgb(209, 27, 27)   @endif">
                                    <input type="password" class="input  col-xl-1 col-3 col-md-2 col-lg-2 col-sm-3 " placeholder="*"  value="" style=" @if (Session::has('error')) border: 3px solid rgb(209, 27, 27)   @endif">
                                    <input type="password" class="input  col-xl-1 col-3 col-md-2 col-lg-2 col-sm-3 " placeholder="*"  value="" style=" @if (Session::has('error')) border: 3px solid rgb(209, 27, 27)   @endif">
                                    <input type="password" class="input  col-xl-1 col-3 col-md-2 col-lg-2 col-sm-3 " placeholder="*"  value="" style=" @if (Session::has('error')) border: 3px solid rgb(209, 27, 27)   @endif">
                                    {{-- <span class="views"></span> --}}
                                </div>
                                </div>

                                {{-- <div class="stateColor"><p class="text">Unlocked</p></div> --}}
                                </div>


                                <input class="password" name="password" hidden>
                                <button class="btn-connexion" type="submit">Se connecter</button>
                                <div class="reload mb-5">Recharger</div>
                                <a href="#" class="forgetpass">Mot de passe oublié?</a>




                            </div>

                    </form>
            {{-- <span class="views"></span> --}}
            </div>

            </div>

        </div>
    </div>
</section>





    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>
    <script src="{{asset('assets/js/codepin.js')}}"></script>

</body>
</html>
