<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BerkanPortfolio</title>
        @yield('css')
        <link href="{{ asset('css/general.css') }}" rel="stylesheet">
        <script src="{{ asset('js/script.js') }}" defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="icon" href="{{asset('images/berkan_logowit.png')}}" type="image/x-icon">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/e0cf27849f.js" crossorigin="anonymous"></script>

        <style>
            
        </style>
    </head>
    <body>
        <div class="navbar"> 
            <div class="icons">
                <a href="https://www.instagram.com/berkan_078/"><i id="instaLogo" class="fa fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/berkan-kaya-860236244"><i id="linkedInLogo"class="fa fa-linkedin"></i></a>
                <a href="https://github.com/BerkanKaya"><i id="githubLogo"class="fa fa-github"></i></a>
            </div>
            @yield('links')
        </div>
        
        @yield('content')

    </body>
</html>
