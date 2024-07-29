@extends('default.default')

@section('page_title')
Ingredients
@endsection

@section('main')
<ul>
    @foreach ($ingredients as $ingredient)
    <li class="m-2">
        <div class="w-75">
            <div class="d-flex justify-content-between align-items-center mb-1 mt-3">
                <span class="title"><strong>{{$ingredient['name']}}</strong></span>
                <button class="btn btn-outline-danger ms-3 myBtn">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </div>
            <hr>
        </div>
    </li>
    @endforeach
    @include('partials.modal')
</ul>
@endsection