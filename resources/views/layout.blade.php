<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script src="/js/app.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    @yield('extra-js')
    <script>
        // CAND dau click pe search icon, SA apara input field de la right: -999px; la right: 0px SI icon-ului de search sa i se
        // atribuie o clasa (activeSearch);
        // Daca activeSearch, click-ul pe search icon va da submit la form
    $(document).ready(function(){
        let searchIcon = $('#search-icon');
        let searchInput = $('#search-input');

        let menuIcon = $('#b-menu-icon');
        let menu = $('#b-menu');
        
        menuIcon.click(function(e){ //se schimba burgerline, opacitatea meniului se face 1
            if(!menu.hasClass('activeMenu')){
                menu.removeClass('hidden');
                setTimeout(function(){
                    menuIcon.addClass('activeMenu')
                    menu.addClass('activeMenu');
                }, 300);
                
                if(menu.hasClass('hidden'))
                    menu.removeClass('hidden');
            }
            else{
                menu.removeClass('activeMenu');
                menuIcon.removeClass('activeMenu');
                setTimeout(function(){
                    menu.addClass('hidden');
                }, 700);
            }
            setTimeout(function(){
                if(menu.hasClass('activeMenu') && menu.hasClass('hidden'))
                    menu.removeClass('hidden');
            }, 800)
        });

        searchIcon.click(function(e){  
            if(!searchIcon.hasClass('activeSearch')){
                e.preventDefault();          
                searchInput.addClass('search-input-animation');
                searchIcon.attr('type', 'submit');
                searchIcon.addClass('activeSearch');
            }
            else
                $('#search-form').submit();
        });

    });
    </script>

</head>

<body style="font-family: Nunito Sans, Arial, Helvetica, sans-serif">
    @include('partials.nav')

    @yield('content')

    @include('partials.navigation')


</body>

</html>