<div class="card" style="width: 18rem;">
    <img
        class="card-img-top"
        src="{{ Vite::asset("resources/img/default.jpg") }}"
        alt="Paperella Laravel Template"
    />
    <div class="card-body">
        <h5 class="card-title">{{ $cocktail['name'] }}</h5>
        <p class="card-text">descrizione</p>
        <p class="card-text">ingredienti</p>
        <a href="#" class="btn btn-secondary">More Info</a>
        <a href="#" class="btn btn-primary">Add To Cart</a>
    </div>
</div>