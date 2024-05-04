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
<body>
    <style>
        body{
            background:linear-gradient(15deg , #0e0e0e, #030f97b5)
        }

    </style>



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
             <div class="col-xl-6 col-xl-6 col-md-6 col-lg-6" style="display: flex; ">
                    <div class="connexion-djamo col-xl-8 col-md-8 col-lg-8 col-sm-8 col-12">

                        <svg style="filter: invert(10)" width="161" height="49" class="w-[107px] h-[32px] lg:w-[161px] lg:h-[49px] flex justify-center items-start" viewBox="0 0 161 49" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.7443 5.02186C42.3006 1.98934 44.7517 0.5 47.7764 0.5C51.0098 0.5 53.0959 2.33028 52.47 5.68579C51.9138 8.7183 49.4105 10.2076 46.3857 10.2076C43.1524 10.2076 41.1011 8.35943 41.7443 5.02186Z" fill="black"></path><path d="M39.015 20.6331H34.8082L39.015 12.6481H50.6273L46.9246 30.5023L44.63 41.6993L43.1524 48.5H33.2437L39.015 20.6331Z" fill="black"></path><path d="M25.5253 29.7664H32.2007L27.9938 37.7515H20.5536C17.2855 37.7515 15.8774 36.9978 15.8426 34.7728C13.8957 37.1055 11.4272 38.236 8.40241 38.236C5.60363 38.236 3.43067 37.0517 1.84876 34.6831C0.318994 32.2786 -0.150365 29.2461 0.44068 25.6035C1.88353 16.9545 7.28985 12.6659 16.677 12.6659H17.0595L15.495 20.3818H15.0256C12.4702 20.3818 10.7318 22.3556 10.2277 25.8726C9.84525 28.3668 10.8709 29.9997 12.87 29.9997C14.9039 29.9997 16.0165 28.4565 16.8161 24.5627L20.9013 4.5194H30.7231L25.5253 29.7664Z" fill="black"></path><path d="M82.7177 29.7665H76.5117L77.9719 22.6607H68.1501L67.7677 24.5448C66.968 28.3668 65.7686 29.9818 63.7347 29.9818C61.8225 29.9818 60.8838 28.313 61.5269 25.5496C62.4135 21.3867 66.7942 19.5384 73.4695 20.2382L75.121 20.4177L79.3278 12.953L77.7981 12.648C68.5847 11.0151 61.0228 12.3788 56.0858 16.9904C53.6174 19.2693 52.1398 22.1224 51.6704 25.5855C51.1489 29.1384 51.7573 32.0812 53.4088 34.4857C55.1124 36.9081 57.3201 38.0924 60.0841 38.0924C62.9176 38.0924 65.1428 36.9979 66.7942 34.8087C66.9159 36.962 68.2718 37.7515 71.5052 37.7515H78.5108L82.7177 29.7665Z" fill="black"></path><path d="M124.682 29.7664H130.853L126.646 37.7514H118.702C116.616 37.7514 115.26 37.3566 114.617 36.5671C113.973 35.7776 113.887 34.2882 114.356 32.0452L115.973 24.1499C116.477 21.566 115.973 20.5432 114.095 20.5432C112.218 20.5432 111.54 21.3686 110.862 24.5806L108.15 37.7514H98.2934L101.092 24.1499C101.648 21.566 101.092 20.5432 99.2147 20.5432C98.2412 20.5432 97.5633 20.8483 97.0939 21.4225C96.6767 21.9967 96.2943 23.2169 95.9118 25.0292L93.2695 37.7514H83.413L86.9419 20.6329H82.735L86.9419 12.6479H92.974C96.1552 12.6479 97.4416 13.3477 97.6154 15.4472C99.319 13.3477 101.909 12.1096 104.239 12.1096C107.976 12.1096 110.184 13.4733 110.862 16.2367C113.33 13.4733 116.094 12.1096 119.102 12.1096C125.429 12.1096 127.515 15.8419 125.864 23.9526L124.682 29.7664Z" fill="black"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M148.602 11.8225C141.961 11.8225 134.869 14.6576 133.009 23.809C130.888 34.0191 137.407 37.7514 144.795 37.7694C148.358 37.7694 151.488 36.9798 154.373 35.2572C157.328 33.4449 159.536 30.1253 160.44 25.6931C161.344 20.6509 160.579 17.1877 158.093 14.9986C155.607 12.7556 152.531 11.8225 148.602 11.8225ZM147.715 20.5432C149.558 20.5432 150.74 21.9787 150.375 24.2217C149.836 27.5413 148.428 28.8871 145.786 28.8871C143.926 28.8871 142.709 27.4337 143.022 25.1548C143.508 22.0864 145.09 20.5432 147.715 20.5432Z" fill="black"></path></svg>
                        <h1 class="" style="color: rgb(23, 116, 237)">Connectez-vous <br></h1>

                        <form action="{{ route('loginAction') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3 col-md-12 d-block">
                                <input type="email" class="form-control d-block" id="floatingInput" placeholder="name@example.com" name="email">
                                <label for="floatingInput">Entrez votre email</label>

                               @if (Session::has('errorEmail'))
                               <span class="text-danger">{{ Session::get('errorEmail') }}</span>
                               @endif
                              </div>
                              <button class="btn-connexion">Se connecter</button>

                        </form>
                        <br>
                        @if (Session::has('tentative'))
                        <span class="bg-danger text-light p-2">{{ Session::get('tentative') }}</span>
                        @endif
                    </div>
             </div>

            </div>
        </div>
    </section>





    <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script>


</body>
</html>
