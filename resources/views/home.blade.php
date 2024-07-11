
@extends("default.default")

@section("page_title")
Cocktails - Choose Yours
@endsection


@php
    $cocktails = [
        [
            "name" => "nome1",
            "image_url" => "nomefile",
            "price" => 19.99,
            "ingredients" => "Avocado pasta e pizza"
        ],
        [
            "name" => "nome1",
            "image_url" => "nomefile",
            "price" => 19.99,
            "ingredients" => "Avocado pasta e pizza"
        ],
        [
            "name" => "nome1",
            "image_url" => "nomefile",
            "price" => 19.99,
            "ingredients" => "Avocado pasta e pizza"
        ],
        [
            "name" => "nome1",
            "image_url" => "nomefile",
            "price" => 19.99,
            "ingredients" => "Avocado pasta e pizza"
        ],  
        [
            "name" => "nome1",
            "image_url" => "nomefile",
            "price" => 19.99,
            "ingredients" => "Avocado pasta e pizza"
        ]
    ]

@endphp

@section("main")
    <div class="row row-cols-4 g-4">
        @foreach ($cocktails as $cocktail)
            <div class="col">
                @include("partials.cocktail")    
            </div>
        @endforeach
    </div>

@endsection
    {{--  --}}