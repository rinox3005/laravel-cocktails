@extends('default.default')

@section('page_title')
    Cocktails - Choose Yours
@endsection

@section('main')
    <div class="row row-cols-lg-4 row-cols-md-3 g-4 justify-content-center my-5">
        @foreach ($cocktails as $cocktail)
            <div class="col">
                <div class="card" style="width: 18rem">
                    <img class="card-img-top" src="{{ Vite::asset('resources/img/default.jpg') }}"
                        alt="Paperella Laravel Template" />
                    <div class="card-body d-grid">
                        <h5 class="card-title">{{ $cocktail->name }}</h5>
                        <p class="card-text">{{ $cocktail->description }}</p>
                        <p class="card-text">{{ $cocktail->type_of_prep }}</p>
                        <div class="buttons align-self-end">
                            <a href="{{ route('cocktails.show') }}" class="btn btn-secondary">More Info</a>
                            <button class="btn btn-danger">Delete Cocktail</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @include('partials.modal')
    </div>
@endsection
