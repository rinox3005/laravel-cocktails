@extends('default.default')

@section('page_title')
    Cocktails - Add New Cocktail
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
            <form class="mt-5" action="{{ route('cocktails.store') }}" method="POST">
                @csrf
                {{-- Title --}}
                <div class="form-group">
                    <label for="name">Titolo</label>
                    <input value="{{ old('name', $cocktail->name ?? '') }}" type="text" name="name" id="name"
                        class="form-control" required>
                </div>

                {{-- Price --}}
                <div class="mt-3 form-group">
                    <label for="price">Prezzo</label>
                    <input value="{{ old('price', $cocktail->price ?? '') }}" type="number" name="price" id="price"
                        class="form-control" step="0.01">
                </div>

                {{-- Image --}}
                <div class="mt-3 form-group">
                    <label for="image">Image</label>
                    <input value="{{ old('image', $cocktail->image ?? '') }}" type="text" name="image" id="image"
                        class="form-control">
                </div>

                {{-- description --}}
                <div class="mt-3 form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" required>{{ old('description', $cocktail->description ?? '') }}</textarea>
                </div>

                {{-- ingredients --}}
                <div class="mt-3 form-group">
                    <label for="ingredients">Ingredienti: </label>
                    <div class="d-flex flex-wrap justify-content-between">
                        @foreach ($ingredients as $ingredient)
                            <div class="col-4 d-flex flex-column justfy-content-center align-items-center">
                                <span class="mb-2">{{ $ingredient->title }}</span>
                                <input class="checkbox" name="ingredients[]" type="checkbox" value="{{ $ingredient->id }}"
                                    {{ in_array($ingredient->id, old('ingredients', [])) ? 'checked' : '' }}>
                            </div>
                        @endforeach
                    </div>
                    <input type="text" name="ingredients" id="ingredients" class="form-control" required>
                </div>

                {{-- preparation type --}}
                <div class="mt-3 form-group">
                    <label>Tipo di preparazione</label>
                    <select name="type_of_prep" class="form-select" aria-label="Default select example">
                        @foreach ($type_of_prep as $prep)
                            <option value="{{ $prep }}">{{ $prep }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- preparation time --}}
                <div class="mt-3 form-group">

                    <label for="serving_temp">Tempo di preparazione</label>
                    <input value="{{ old('serving_temp', $cocktail->serving_temp ?? '') }}" type="number"
                        name="serving_temp" id="serving_temp" class="form-control" step="0.01" required>
                </div>

                {{-- glass type --}}
                <div class="mt-3 form-group">
                    <label for="glass_type">Tipo di bicchiere</label>
                    <input value="{{ old('glass_type', $cocktail->glass_type ?? '') }}" type="text" name="glass_type"
                        id="glass_type" class="form-control">
                </div>

                {{-- preparation --}}
                <div class="mt-3 form-group">
                    <label for="preparation">Preparazione</label>
                    <textarea name="preparation" id="preparation" class="form-control" required>{{ old('preparation', $cocktail->preparation ?? '') }}</textarea>
                </div>

                {{-- needs ice --}}
                <div class="mt-3 form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="needs_ice" id="no_needs_ice" value="0">
                        <label class="form-check-label" for="no_needs_ice">
                            Senza Ghiaccio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="needs_ice" id="needs_ice" value="1"
                            checked>
                        <label class="form-check-label" for="needs_ice">
                            Con Ghiaccio
                        </label>
                    </div>
                </div>

                {{-- available --}}
                <div class="mt-3 form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_available" id="not_available"
                            value="0">
                        <label class="form-check-label" for="not_available">
                            Non disponibile
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_available" id="available" value="1"
                            checked>
                        <label class="form-check-label" for="available">
                            Disponibile
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create Cocktail</button>
            </form>
        </div>
    </section>
@endsection
