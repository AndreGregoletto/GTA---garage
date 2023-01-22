<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Controle</a>
        <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarNavAltMarkup" 
            aria-controls="navbarNavAltMarkup" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
        >    
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" aria-current="page" href="#">Home</a>
                <a class="nav-link {{ Request::segment(1)  == 'garage'   ? 'text-primary text-bold' : '' }}" href="{{ route('garageIndex') }}">Garagem</a>
                <a class="nav-link {{ Request::segment(1)  == 'car'      ? 'text-primary text-bold' : '' }}" href="#">Carros</a>
                <a class="nav-link {{ Request::segment(1)  == 'brand'    ? 'text-primary text-bold' : '' }}" href="{{ route('brandIndex') }}">Marcas</a>
                <a class="nav-link {{ Request::segment(1)  == 'category' ? 'text-primary text-bold' : '' }}" href="{{ route('categoryIndex') }}">Categorias</a>
            </div>
        </div>
    </div>
</nav>