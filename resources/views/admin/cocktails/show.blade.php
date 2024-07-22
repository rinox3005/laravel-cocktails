@extends('default.default')

@section('page_title')
    {{ $cocktail->name }}
@endsection

@section('main')
    <div class="row col-10 g-4 justify-content-center my-5">

        <div class="card" style="width: 18rem">
            <img class="card-img-top" src="{{ Vite::asset('resources/img/default.jpg') }}" alt="Paperella Laravel Template" />
            <div class="card-body d-grid">
                <h5 class="card-title">{{ $cocktail->name }}</h5>
                <p class="card-text">{{ $cocktail->description }}</p>
                <p class="card-text">{{ $cocktail->type_of_prep }}</p>
                <div class="buttons align-self-end">
                    <a href="{{ route('cocktails.index') }}" class="btn btn-secondary">Go Back</a>
                    <button id="myBtn" class="btn btn-danger">Delete Cocktail</button>
                </div>
            </div>
        </div>
        @include('partials.modal')
    </div>
@endsection
