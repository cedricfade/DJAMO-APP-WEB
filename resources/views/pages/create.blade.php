<!DOCTYPE html>
<html lang="FR_fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DJAMO LOGIN</title>
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body style="">

    <section class="background">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-6 col-md-6 col-lg-6 col-12 djamo-info d-none d-xl-flex d-xl-flex d-md-flex  " style="">

                        <div class="item-card" style="border: none;background: none;">

                            <img src="{{asset('assets/images/menu-icon-card.svg')}}" alt="" class="card-targ targ1 animate__animated animate__fadeInRight">
                            <img src="{{asset('assets/images/menu-icon-transfers.svg')}}" alt="" class="card-targ targ2 animate__fadeInUp">
                            <img src="{{asset('assets/images/menu-icon-vault.svg')}}" alt="" class="card-targ targ3 animate__fadeInLeft">

                        </div>
                        <div class="carte-djamo ">
                            <img src="assets/images/djamo_card_small_bgfi.png" alt=""  >


                        </div>
                        <!-- <div class="titre-connexion ">
                            <h2>Connexion DJAMO</h2>
                        </div>
                 -->




             </div>
             <div class="col-xl-6 col-xl-6 col-md-6 col-lg-6" style="display: flex;">
                    <div class="connexion-djamo col-xl-8 col-md-8 col-lg-8 col-sm-8 col-12">
                        <h1 class="">Inscription <br> <span style="font-weight: 900; color: rgb(10, 7, 196);text-shadow: 0  px rgb(12, 12, 15);">DJAMO</span></h1>

                        <form action="{{ route('createAction') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3 col-md-6 d-block">
                                <input type="text" class="form-control d-block" name="nom" id="nom" >
                                <label for="nom">Nom </label>


                              </div>
                              <div class="form-floating mb-3 col-md-6 d-block">
                                <input type="text" class="form-control d-block" id="floatingInput"  name="prenom">
                                <label for="floatingInput">Prénom</label>


                              </div>
                              <div class="form-floating mb-3 col-md-6 d-block">
                                <input type="text" class="form-control d-block" id="floatingInput" name="contact" >
                                <label for="floatingInput">Contact</label>


                              </div>
                              <div class="form-floating mb-3 col-md-6 d-block">
                                <input type="email" class="form-control d-block" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingIput">Email</label>



                              </div>
                              <div class="form-floating mb-3 col-md-6 d-block">
                                <input type="password" class="form-control d-block" id="floatingInput" name="password">
                                <label for="floatingInput">Code PIN</label>


                              </div>

                              <div class="form-floating mb-3 col-md-6 d-block">
                                <input type="password" class="form-control d-block" id="floatingInput" name="confirmPassword">
                                <label for="floatingInput">Code PIN confirm</label>


                              </div>

                              <button class="btn-connexion">Se connecter</button>

                        </form>
                    </div>
             </div>

            </div>
        </div>
    </section>





    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>


</body>
</html>
