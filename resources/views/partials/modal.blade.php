<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <p>Are you sure you want to delete the record?</p>
        <div class="modal-buttons">
            @if(isset($cocktails) && Route::currentRouteName() == 'cocktails.index')
            <form action="{{ route('cocktails.destroy', $cocktail->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Confirm</button>
            </form>
            @elseif(isset($ingredients) && Route::currentRouteName() == 'ingredients.index')
            <form action="{{ route('ingredients.destroy', $ingredient->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Confirm</button>
            </form>
            @endif
            <button class="close">Close</button>
        </div>
    </div>
</div>