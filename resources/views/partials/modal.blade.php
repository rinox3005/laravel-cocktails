<!-- The Modal -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <p>Are you sure you want to delete the cocktail?</p>
        <div class="modal-buttons">
            <form action="{{ route('cocktails.destroy', $cocktail->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button>Confirm</button>
            </form>
            <button class="close">Close</button>
        </div>
    </div>
</div>
