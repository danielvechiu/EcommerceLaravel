@extends('layout')

@section('content')
<div class="bg-product">

    {{-- product image --}}
    <div class="bg-product h-64" style=" top:0; left:0; z-index: -1;">
        <img style="mix-blend-mode: darken; bottom: 10px;" class="relative" src="{{ productImage($product->image) }}">
    </div>

    {{-- buttons --}}
    <div>
        {{-- <form action="{{ route('cart.addToFavourites', $product) }}" method="POST">
        @csrf
        <button type="submit">fav</button>
        </form> --}}
        <div class="py-5"></div>
    </div>

    {{-- info --}}
    <div style=" border-radius: 24px 24px 0 0;" class="py-4 shadow-product-page-info bg-white px-6">
        <div class="flex justify-between">
            <h5 class="font-extrabold">{{$product->name}}</h5>
            @if (!$product->quantity)
            <h6 class="text-gray-500 font-extrabold"><span class="text-red-500 ">no</span> stock</h6>
            @else
            <h6 class="text-gray-500 font-extrabold">{{$product->quantity}} in stock</h6>
            @endif
        </div>

        <h5 class="my-3 text-gray-500">€{{$product->price}}</h5>
        <p class="text-sm">{{$product->description}}</p>

        {{-- Sizes --}}
        <div class="flex justify-between">
            <div>
                <div class="mt-3">
                    <h5 class="font-extrabold text-sm sm:bluetext">Size</h5>
                    <div class="mt-3 grid grid-cols-10 text-center grid-row-1 overflow-hidden">
                        <div><a class="size rounded-lg bg-gray-400 p-1 text-xs text-white mx-auto" data-size="40">40</a>
                        </div>
                        <div><a class="size rounded-lg bg-gray-400 p-1 text-xs text-white mx-auto" data-size="41">41</a>
                        </div>
                        <div><a class="size rounded-lg bg-gray-400 p-1 text-xs text-white mx-auto" data-size="42">42</a>
                        </div>
                        <div><a class="size rounded-lg bg-gray-400 p-1 text-xs text-white mx-auto" data-size="43">43</a>
                        </div>
                        <div><a class="size rounded-lg bg-gray-400 p-1 text-xs text-white mx-auto" data-size="44">44</a>
                        </div>
                    </div>
                </div>

                {{-- Colors --}}
                <div class="mt-3">
                    <h5 class="font-extrabold text-sm sm:bluetext">Colors</h5>
                    <div class="flex justify-between">
                        <div class="mt-3 grid grid-cols-10 text-center grid-row-1 overflow-hidden">
                            <div class="flex justify-between">
                                <div class="color-product rounded-md p-3 mx-auto text-xs text-white bg-blue-800"
                                    data-color="blue">
                                    <a></a>
                                </div>
                                <div class="color-product rounded-md p-3 mx-auto text-xs text-white bg-red-800"
                                    data-color="red">
                                    <a></a>
                                </div>
                                <div class="color-product rounded-md p-3 mx-auto text-xs text-white bg-green-800"
                                    data-color="green">
                                    <a></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="h-12"></div>
            </div>

            <button class="pt-1 bg-black text-white py-1 px-2 rounded bg-orange-500 h-8 w-full text-center my-auto"
                id="atcBtnForm">Add to
                Cart</button>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script>
    $(document).ready(function(){

    let url = window.location.href;
    let initialUrl = window.location.href;
    let activeSize = null;
    let activeColor = null;
    let slug = initialUrl.split('/').pop();

    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $("#atcBtnForm").click(function(){
        $.ajax({
            url: "/cart",
            type: "POST",
            data:{
                slug: slug,
                color: $(activeColor).data('color'),
                size: $(activeSize).data('size'),
                _token: '{!!csrf_token()!!}'
            },
            success: function(response){
                window.location.href = "{{ route('cart.index') }}";
            },
            error: function (data, textStatus, errorThrown) {
                console.log(error);
            },
        });
    });
    
    $('.size').click(function(){
        if(this == activeSize){
            if($(this).hasClass('active'))
                $(this).removeClass('active');
            else
                $(this).addClass('active');
        }
        else{
            $(this).addClass('active');
            $(activeSize).removeClass('active');
            activeSize = this;
        }
        

        if(!url.includes("size"))
            url = url + "?size=" + $(activeSize).data('size');
        else
        if(url.includes("color"))
            url = initialUrl + "?size=" + $(activeSize).data('size') + "?color=" + $(activeColor).data('color');
        else
            url = initialUrl + "?size=" + $(activeSize).data('size');

        console.log(url);        
        // if(activeSize && activeColor)
        //     {url = url.replace(':slug', "['product' => $product, 'color' => " + $(activeColor).data('color') + ", 'size' =>" + $(activeSize).data('size')); console.log(url);}
        // else if(!activeSize) console.log('size neales');
        // else if(!activeColor) console.log('color neales');
    });

    $('.color-product').click(function(){
        if(this == activeColor){
            if($(this).hasClass('active-color'))
                $(this).removeClass('active-color');
            else
                $(this).addClass('active-color');
        }
        else{
            $(this).addClass('active-color');
            $(activeColor).removeClass('active-color');
            activeColor = this;
        }

        if(!url.includes("color"))
            url = url + "?color=" + $(activeColor).data('color');
        else
        if(url.includes("size"))
            url = initialUrl + "?color=" + $(activeColor).data('color') + "?size=" + $(activeSize).data('size');
        else
            url = initialUrl + "?color=" + $(activeColor).data('color');
        
        console.log(url);
        // if(activeSize && activeColor)
        //     {url = url.replace(':slug', "['product' => $product, 'color' => " + $(activeColor).data('color') + ", 'size' =>" + $(activeSize).data('size')); console.log(url);}
        // else if(!activeSize) console.log('size neales');
        // else if(!activeColor) console.log('color neales');
    });
});

</script>
@endsection