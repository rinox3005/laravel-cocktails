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
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                {{-- Price --}}
                <div class="mt-3 form-group">
                    <label for="price">Prezzo</label>
                    <input type="number" name="price" id="price" class="form-control" step="0.01" required>
                </div>

                {{-- Image --}}
                <div class="mt-3 form-group">
                    <label for="image">Image</label>
                    <input type="text" name="image" id="image" class="form-control" required>
                </div>

                {{-- description --}}
                <div class="mt-3 form-group">
                    <label for="description">Descrizione</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>

                {{-- ingredients --}}
                <div class="mt-3 form-group">
                    <label for="ingredients">Ingredienti (separati da virgola)</label>
                    <input type="text" name="ingredients" id="ingredients" class="form-control" required>
                </div>

                {{-- preparation type --}}
                <div class="mt-3 form-group">
                    {{-- <label for="type_of_prep">Tipo di preparazione</label>
                    <input type="text" name="type_of_prep" id="type_of_prep" class="form-control" required> --}}
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($type_of_prep as $prep)
                            <option value="{{ $prep }}">{{ $prep }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- preparation time --}}
                <div class="mt-3 form-group">
                    <label for="serving_temp">Tempo di preparazione</label>
                    <input type="number" name="serving_temp" id="serving_temp" class="form-control" step="0.01"
                        required>
                </div>

                {{-- glass type --}}
                <div class="mt-3 form-group">
                    <label for="glass_type">Tipo di bicchiere</label>
                    <input type="text" name="glass_type" id="glass_type" class="form-control" required>
                </div>

                {{-- preparation --}}
                <div class="mt-3 form-group">
                    <label for="preparation">Preparazione</label>
                    <textarea name="preparation" id="preparation" class="form-control" required></textarea>
                </div>

                {{-- needs ice --}}
                <div class="mt-3 form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="no_needs_ice">
                        <label class="form-check-label" for="no_needs_ice">
                            Senza Ghiaccio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="needs_ice" checked>
                        <label class="form-check-label" for="needs_ice">
                            Con Ghiaccio
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Create Cocktail</button>
            </form>
        </div>
    </section>
@endsection
