<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="{{ route('home') }}">NomeBar</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">All Drinks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Beers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gins</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rums</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Etc</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cocktails.index') }}">Admin Panel</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search your drink" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>