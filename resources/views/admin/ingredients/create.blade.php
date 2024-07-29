@extends('default.default')

@section('page_title')
    Ingredients - Add New Ingredient
@endsection

@section('main')
    <section>
        <div class="container">
            @if ($errors->any())
                <div class="mt-5 alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="mt-5" action="{{ route('ingredients.store') }}" method="POST">
                @csrf

                {{-- Name --}}
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input value="{{ old('name', $ingredient->name ?? '') }}" type="text" name="name" id="name"
                        class="form-control" required>
                </div>

                {{-- type --}}
                <div class="mt-3 form-group">
                    <label>Tipo di ingrediente</label>
                    <select name="type" class="form-select" aria-label="Default select example">
                        @foreach ($ingredients_types as $type)
                            <option value="{{ $type }}">{{ $type }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Alcohol Content --}}
                <div class="mt-3 form-group">

                    <label for="grade">Gradazione Alcolica</label>
                    <input value="{{ old('grade', $ingredient->grade ?? '') }}" type="number" name="grade" id="grade"
                        class="form-control" step="0.1">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Create Ingredient</button>
            </form>
        </div>
    </section>
@endsection
