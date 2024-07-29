@extends('default.default')

@section('page_title')
Ingredients
@endsection

@section('main')
<div class="row row-cols-lg-4 row-cols-md-3 g-4 justify-content-center my-5">
    @foreach ($ingredients as $ingredient)
    <div class="col">
        <div class="card" style="width: 18rem">
            <img class="card-img-top" src="{{ Vite::asset('resources/img/default.jpg') }}" alt="Paperella Laravel Template" />
            <div class="card-body d-grid">
                <h5 class="card-title">{{ $ingredient->name }}</h5>
                <div class="buttons align-self-end">
                    <button class="btn btn-danger myBtn">Delete Cocktail</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @include('partials.modal')
</div>
@endsection