@extends("default.default")

@section("page_title")
    Cocktails - Choose Yours
@endsection

@section("main")
    <div
        class="row row-cols-lg-4 row-cols-md-3 g-4 justify-content-center my-5"
    >
        @foreach ($cocktails as $cocktail)
            <div class="col">
                @include("partials.cocktail")
            </div>
        @endforeach
    </div>
@endsection

{{--  --}}
