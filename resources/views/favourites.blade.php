@extends('layout')

@section('content')
<div class="mt-6">
    <p class="text-center">
        Items you love:
    </p>


    @if ($favs)
    @foreach ($favs as $cartItem)
    <div style="border-radius: 30px;" class="relative bg-product shadow-lg m-10 h-128 mb-24">
        <a href="{{route('products.show', $cartItem->options->slug)}}" class="absolute h-128 w-full"
            style="z-index: 2; left:0; top:0;"></a>
        {{-- heart icon --}}

        <form action="{{ route('favourites.destroy', $cartItem->rowId) }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="relative" style="left: 20px; top: 20px;"><button type="submit"><svg width="29" height="25"
                        viewBox="0 0 29 25" fill="#ffffff" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.5 2.31812C13.0018 0.940516 11.0408 0.175937 9.00554 0.175873C7.92828 0.176994 6.86188 0.391142 5.8677 0.805992C4.87352 1.22084 3.9712 1.8282 3.21266 2.59312C-0.0227156 5.84225 -0.0213407 10.9242 3.21541 14.1596L13.2969 24.2411C13.5307 24.6522 13.9817 24.9176 14.5 24.9176C14.7129 24.9156 14.9223 24.8636 15.1114 24.7659C15.3005 24.6683 15.4641 24.5276 15.589 24.3552L25.7847 14.1596C29.0214 10.9229 29.0214 5.84225 25.7819 2.58762C25.0238 1.82411 24.1222 1.21798 23.129 0.804087C22.1357 0.390194 21.0705 0.176697 19.9945 0.175873C17.9593 0.176205 15.9984 0.940748 14.5 2.31812ZM23.8377 4.53187C25.9868 6.692 25.9882 10.0662 23.8404 12.2154L14.5 21.5557L5.15966 12.2154C3.01191 10.0662 3.01328 6.692 5.15691 4.53737C6.20191 3.49787 7.56866 2.92587 9.00554 2.92587C10.4424 2.92587 11.8037 3.49787 12.8404 4.53462L13.5279 5.22212C13.6555 5.34992 13.807 5.45131 13.9738 5.52049C14.1406 5.58967 14.3195 5.62527 14.5 5.62527C14.6806 5.62527 14.8594 5.58967 15.0262 5.52049C15.193 5.45131 15.3446 5.34992 15.4722 5.22212L16.1597 4.53462C18.2387 2.45975 21.7614 2.46525 23.8377 4.53187Z"
                            fill="black" />
                    </svg>
                </button>
            </div>
        </form>

        {{-- product image --}}
        <div class="pt-4"><img style="mix-blend-mode:darken;" src="{{ productImage($cartItem->image) }}" alt=""></div>

    </div>
    @endforeach
    @else
    You don't love anything yet :(
    @endif
</div>
@endsection