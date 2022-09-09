<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BerkanPortfolio</title>
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">
        <script src="{{ asset('js/script.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="icon" href="{{asset('images/berkan_logowit.png')}}" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e0cf27849f.js" crossorigin="anonymous"></script>

        <style>
            body {
                background-color: #111;
            }
        </style>
    </head>
<body>
    <div class="navbar"> 
        <div class="icons">
            <i id="instaLogo"class="fa fa-instagram"></i>
            <i id="linkedInLogo"class="fa fa-linkedin"></i>
            <i id="githubLogo"class="fa fa-github"></i>
        </div>
        <div class="links">
            <a href="#">Werk</a>
            <a href="#">Contact</a> 
        </div>
    </div>

    <p class="intro">Hoi. Ik ben Berkan. Een Software Developer </p>

    <p class="description">Ik ben een erg enthiousaste student wanneer het komt op Web Development en Design. En streef altijd tot perfectionisme</p>

    <div class="logoBackground"></div>

    <div class="moveLogo">
        <img src="images/berkan_logowit.png" class="logo">
    </div>

    <div class="workBackground show-on-scroll">
        <p class="tickit"> Tick-It </p> 
        <p class="myWork"> Mijn Werk </p> 
        <img src="images/schermopnametickit.png" class="tickitFoto">
    </div>

    <div class="contactBackground show-on-scroll">
        <p class="questions"> Vragen? </p> 
        <p class="mail"> Stuur me een mailtje! </p> 
        <i id="envelope" class="fa fa-envelope fa-8x"></i>
    </div>

</body>
