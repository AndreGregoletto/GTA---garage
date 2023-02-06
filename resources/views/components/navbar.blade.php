<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">GarageTAuto</a>
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
            <div class="navbar-nav me-auto p-2 bd-highlight">
                <a class="nav-link {{ Request::segment(1)  == 'index'     ? 'text-primary text-bold' : '' }}" href="{{ route('home') }}">Home</a>
                <a class="nav-link {{ Request::segment(1)  == 'addCar'    ? 'text-primary text-bold' : '' }}" href="{{ route('addCar') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Veículos
                </a>
                <a class="nav-link {{ Request::segment(1)  == 'addGarage' ? 'text-primary text-bold' : '' }}" href="{{ route('addGarage') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>
                    Garagens
                </a>
                
                @if (auth()->user()->admin == 1)
                    <a class="nav-link {{ Request::segment(1)  == 'car'      ? 'text-primary text-bold' : '' }}" href="{{ route('carIndex') }}">Carros</a>
                    <a class="nav-link {{ Request::segment(1)  == 'category' ? 'text-primary text-bold' : '' }}" href="{{ route('categoryIndex') }}">Categorias</a>
                    <a class="nav-link {{ Request::segment(1)  == 'garage'   ? 'text-primary text-bold' : '' }}" href="{{ route('garageIndex') }}">Garagem</a>
                    <a class="nav-link {{ Request::segment(1)  == 'brand'    ? 'text-primary text-bold' : '' }}" href="{{ route('brandIndex') }}">Marcas</a>
                @endif
            </div>
            <div class="text-white me-3"><b>{{ auth()->user()->name }}</b></div>
            <form action="{{ route('destroyLogin') }}" method="GET">
                @csrf
                <button type="submit" class="btn btn-danger text-end bd-highlight">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-door-closed" viewBox="0 0 16 16">
                        <path d="M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2zm1 13h8V2H4v13z"></path>
                        <path d="M9 9a1 1 0 1 0 2 0 1 1 0 0 0-2 0z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>