@if (Request::is('shop/*'))
<nav class="overflow-hidden bg-product py-3">
    <div style="z-index:999;" class="grid grid-cols-3 text-center ">

        <button id="b-menu-icon" href="#" class="ml-4 my-auto">
            <div class="burgerline"></div>
            <div class="burgerline"></div>
        </button>

        <h5>
            <a href="/" style="color: black;font-family: Monad, Arial, Helvetica, sans-serif !important;"
                class="title text-2xl">DITRE</a>
        </h5>

        <button id="search-icon" type="" class="pr-4 " style="justify-self: end;">
            <svg width="21" height="21" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.5014 12H11.7114L11.4314 11.73C12.0564 11.004 12.5131 10.1488 12.769 9.22562C13.0248 8.30246 13.0735 7.33416 12.9114 6.39001C12.4414 3.61001 10.1214 1.39001 7.32144 1.05001C6.33706 0.925471 5.33723 1.02778 4.39846 1.34909C3.4597 1.67041 2.60688 2.20222 1.90527 2.90384C1.20366 3.60545 0.671846 4.45827 0.350529 5.39703C0.0292113 6.33579 -0.0730946 7.33562 0.0514397 8.32C0.39144 11.12 2.61144 13.44 5.39144 13.91C6.33559 14.0721 7.30389 14.0234 8.22705 13.7676C9.15021 13.5117 10.0054 13.055 10.7314 12.43L11.0014 12.71V13.5L15.2514 17.75C15.6614 18.16 16.3314 18.16 16.7414 17.75C17.1514 17.34 17.1514 16.67 16.7414 16.26L12.5014 12ZM6.50144 12C4.01144 12 2.00144 9.99001 2.00144 7.50001C2.00144 5.01 4.01144 3.00001 6.50144 3.00001C8.99144 3.00001 11.0014 5.01 11.0014 7.50001C11.0014 9.99001 8.99144 12 6.50144 12Z"
                    fill="black" />
            </svg>
        </button>

        <form id="search-form" action="{{ route('products.search') }}" method="GET" class="my-auto">

            <input id="search-input" style="transform: translateX(-999px); background-color: rgba(201, 201, 201, 0.3)"
                class="absolute change rounded text-center text-white mt-2" type="text" name="search" id="search-input"
                placeholder="Search for item...">
        </form>
    </div>
    <div id="b-menu" style="z-index:999;" class="h-full hidden">
        <div style="position:absolute; top:30%; left:20%; transform: translate(-20%, -30%);" class="">
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="{{ route('home') }}">HOME</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class=""
                    href="{{ route('products.index') }}">SHOP</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="">CONTACT</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="{{ route('about') }}">ABOUT US</a>
            </div>
        </div>
</nav>
@elseif(Request::is('shop'))
<nav style="" class="overflow-hidden py-3">
    <div class="grid grid-cols-3 text-center ">
        <button id="b-menu-icon" href="#" class="ml-4 my-auto">
            <div class="burgerline"></div>
            <div class="burgerline"></div>
        </button>
        <h5>
            <a href="/" style="color: black;font-family: Monad, Arial, Helvetica, sans-serif !important;"
                class="title text-2xl">DITRE</a>
        </h5>

        <button id="search-icon" type="" class="pr-4 " style="justify-self: end;">
            <svg width="21" height="21" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.5014 12H11.7114L11.4314 11.73C12.0564 11.004 12.5131 10.1488 12.769 9.22562C13.0248 8.30246 13.0735 7.33416 12.9114 6.39001C12.4414 3.61001 10.1214 1.39001 7.32144 1.05001C6.33706 0.925471 5.33723 1.02778 4.39846 1.34909C3.4597 1.67041 2.60688 2.20222 1.90527 2.90384C1.20366 3.60545 0.671846 4.45827 0.350529 5.39703C0.0292113 6.33579 -0.0730946 7.33562 0.0514397 8.32C0.39144 11.12 2.61144 13.44 5.39144 13.91C6.33559 14.0721 7.30389 14.0234 8.22705 13.7676C9.15021 13.5117 10.0054 13.055 10.7314 12.43L11.0014 12.71V13.5L15.2514 17.75C15.6614 18.16 16.3314 18.16 16.7414 17.75C17.1514 17.34 17.1514 16.67 16.7414 16.26L12.5014 12ZM6.50144 12C4.01144 12 2.00144 9.99001 2.00144 7.50001C2.00144 5.01 4.01144 3.00001 6.50144 3.00001C8.99144 3.00001 11.0014 5.01 11.0014 7.50001C11.0014 9.99001 8.99144 12 6.50144 12Z"
                    fill="black" />
            </svg>
        </button>

        <form id="search-form" action="{{ route('products.search') }}" method="GET" class="my-auto">

            <input id="search-input" style="transform: translateX(-999px); background-color: rgba(255, 255, 255, 1)"
                class="absolute change rounded text-center text-white mt-2" type="text" name="search" id="search-input"
                placeholder="Search for item...">
        </form>
    </div>
    <div id="b-menu" style="z-index:999;" class="h-full hidden">
        <div style="position:absolute; top:30%; left:20%; transform: translate(-20%, -30%);" class="">
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="{{ route('home') }}">HOME</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class=""
                    href="{{ route('products.index') }}">SHOP</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="">CONTACT</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="{{ route('about') }}">ABOUT US</a>
            </div>
        </div>
    </div>
</nav>
@else
<nav style="" class="overflow-hidden py-3">
    <div class="grid grid-cols-3 text-center">
        <button id="b-menu-icon" href="#" class="ml-4 my-auto">
            <div class="burgerline"></div>
            <div class="burgerline"></div>
        </button>
        <h5>
            <a href="/" style="color: black;font-family: Monad, Arial, Helvetica, sans-serif !important;"
                class="title text-2xl">DITRE</a>
        </h5>

        <button id="search-icon" type="" class="pr-4 " style="justify-self: end;">
            <svg width="21" height="21" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M12.5014 12H11.7114L11.4314 11.73C12.0564 11.004 12.5131 10.1488 12.769 9.22562C13.0248 8.30246 13.0735 7.33416 12.9114 6.39001C12.4414 3.61001 10.1214 1.39001 7.32144 1.05001C6.33706 0.925471 5.33723 1.02778 4.39846 1.34909C3.4597 1.67041 2.60688 2.20222 1.90527 2.90384C1.20366 3.60545 0.671846 4.45827 0.350529 5.39703C0.0292113 6.33579 -0.0730946 7.33562 0.0514397 8.32C0.39144 11.12 2.61144 13.44 5.39144 13.91C6.33559 14.0721 7.30389 14.0234 8.22705 13.7676C9.15021 13.5117 10.0054 13.055 10.7314 12.43L11.0014 12.71V13.5L15.2514 17.75C15.6614 18.16 16.3314 18.16 16.7414 17.75C17.1514 17.34 17.1514 16.67 16.7414 16.26L12.5014 12ZM6.50144 12C4.01144 12 2.00144 9.99001 2.00144 7.50001C2.00144 5.01 4.01144 3.00001 6.50144 3.00001C8.99144 3.00001 11.0014 5.01 11.0014 7.50001C11.0014 9.99001 8.99144 12 6.50144 12Z"
                    fill="black" />
            </svg>
        </button>

        <form id="search-form" action="{{ route('products.search') }}" method="GET" class="my-auto">

            <input id="search-input" style="transform: translateX(-999px); background-color: rgba(201, 201, 201, 0.3)"
                class="absolute change rounded text-center text-white mt-2" type="text" name="search" id="search-input"
                placeholder="Search for item...">
        </form>
    </div>
    <div id="b-menu" style="z-index:999;" class="h-full hidden">
        <div style="position:absolute; top:30%; left:20%; transform: translate(-20%, -30%);" class="">
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="{{ route('home') }}">HOME</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class=""
                    href="{{ route('products.index') }}">SHOP</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="">CONTACT</a></div>
            <div class="mb-6 text-white text-3xl tracking-widest"><a class="" href="{{ route('about') }}">ABOUT US</a>
            </div>
        </div>
</nav>
@endif