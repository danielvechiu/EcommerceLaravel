@extends('layout')

@section('content')
<div class="mx-1 font-semibold">
    @forelse ($content as $product)
    <div class=" text-center grid grid-cols-6 grid-row-1 border-b-1 mx-3">
        <img class="my-auto col-start-1 col-end-3 pb-8" src="{{ productImage($product->image) }}" alt="">

        <p class="my-auto col-start-3 col-end-4">{{$product->qty}}x</p>

        <div class="col-start-4 col-end-7 my-auto">
            <p class="font-extrabold whitespace-no-wrap">
                {{$product->name}}
            </p>
            <p class="">
                €{{$product->price}}
            </p>
        </div>

    </div>
    @empty
    <div class="flex justify-center align-middle mt-32 text-center">
        <div>
            <h5>
                Your cart is empty.
            </h5>
            <h5>
                Find something you like and add it!
            </h5>
        </div>
    </div>
    @endforelse

    @if ($content)
    <div class="absolute w-full mb-12" style="left: 0;bottom:0;">
        <div class="flex justify-between mx-6 border-b-1">
            <h5>
                TOTAL
            </h5>

            <p>
                @php
                $total = 0;
                foreach ($content as $product) {
                $total += $product->qty*$product->price;
                }
                echo('€'.$total);
                @endphp
            </p>
        </div>

        <div class="text-center text-white">
            @if (Cart::count() > 0)
            <button class="my-3 rounded-lg bg-orangeA py-2 px-4">Continue to Checkout <svg class="inline-block"
                    width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5.16428 0.226748C5.21653 0.174364 5.2786 0.132804 5.34694 0.104446C5.41528 0.0760891 5.48854 0.0614929 5.56253 0.0614929C5.63652 0.0614929 5.70978 0.0760891 5.77812 0.104446C5.84645 0.132804 5.90853 0.174364 5.96078 0.226748L9.33578 3.60175C9.38816 3.654 9.42972 3.71607 9.45808 3.78441C9.48644 3.85275 9.50103 3.92601 9.50103 4C9.50103 4.07399 9.48644 4.14725 9.45808 4.21559C9.42972 4.28392 9.38816 4.346 9.33578 4.39825L5.96078 7.77325C5.85516 7.87887 5.7119 7.93821 5.56253 7.93821C5.41316 7.93821 5.2699 7.87887 5.16428 7.77325C5.05866 7.66763 4.99932 7.52437 4.99932 7.375C4.99932 7.22563 5.05866 7.08237 5.16428 6.97675L8.14215 4L5.16428 1.02325C5.11189 0.970997 5.07033 0.908924 5.04198 0.840586C5.01362 0.772248 4.99902 0.698986 4.99902 0.624998C4.99902 0.55101 5.01362 0.477749 5.04198 0.40941C5.07033 0.341072 5.11189 0.278999 5.16428 0.226748Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.5 4C0.5 3.85082 0.559263 3.70774 0.664753 3.60225C0.770242 3.49676 0.913316 3.4375 1.0625 3.4375H8.375C8.52418 3.4375 8.66726 3.49676 8.77275 3.60225C8.87824 3.70774 8.9375 3.85082 8.9375 4C8.9375 4.14918 8.87824 4.29226 8.77275 4.39775C8.66726 4.50324 8.52418 4.5625 8.375 4.5625H1.0625C0.913316 4.5625 0.770242 4.50324 0.664753 4.39775C0.559263 4.29226 0.5 4.14918 0.5 4Z"
                        fill="white" />
                </svg>
            </button>
            @else
            <button disabled class="my-3 rounded-lg bg-orangeA py-2 px-4">Continue to Checkout <svg class="inline-block"
                    width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M5.16428 0.226748C5.21653 0.174364 5.2786 0.132804 5.34694 0.104446C5.41528 0.0760891 5.48854 0.0614929 5.56253 0.0614929C5.63652 0.0614929 5.70978 0.0760891 5.77812 0.104446C5.84645 0.132804 5.90853 0.174364 5.96078 0.226748L9.33578 3.60175C9.38816 3.654 9.42972 3.71607 9.45808 3.78441C9.48644 3.85275 9.50103 3.92601 9.50103 4C9.50103 4.07399 9.48644 4.14725 9.45808 4.21559C9.42972 4.28392 9.38816 4.346 9.33578 4.39825L5.96078 7.77325C5.85516 7.87887 5.7119 7.93821 5.56253 7.93821C5.41316 7.93821 5.2699 7.87887 5.16428 7.77325C5.05866 7.66763 4.99932 7.52437 4.99932 7.375C4.99932 7.22563 5.05866 7.08237 5.16428 6.97675L8.14215 4L5.16428 1.02325C5.11189 0.970997 5.07033 0.908924 5.04198 0.840586C5.01362 0.772248 4.99902 0.698986 4.99902 0.624998C4.99902 0.55101 5.01362 0.477749 5.04198 0.40941C5.07033 0.341072 5.11189 0.278999 5.16428 0.226748Z"
                        fill="white" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M0.5 4C0.5 3.85082 0.559263 3.70774 0.664753 3.60225C0.770242 3.49676 0.913316 3.4375 1.0625 3.4375H8.375C8.52418 3.4375 8.66726 3.49676 8.77275 3.60225C8.87824 3.70774 8.9375 3.85082 8.9375 4C8.9375 4.14918 8.87824 4.29226 8.77275 4.39775C8.66726 4.50324 8.52418 4.5625 8.375 4.5625H1.0625C0.913316 4.5625 0.770242 4.50324 0.664753 4.39775C0.559263 4.29226 0.5 4.14918 0.5 4Z"
                        fill="white" />
                </svg>
            </button>
            @endif

        </div>
    </div>
    @endif

</div>
@endsection