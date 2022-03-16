<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("home")}}">Top 10</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route("home")}}">Albums</a>
                </li>
                @can("create-album")
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("album.create")}}">Új tanuló</a>
                    </li>
                @endcan

            </ul>

            @auth
                <span class="navbar-text">
                    Üdv {{\Illuminate\Support\Facades\Auth::user()->name}}

                    <form class="d-flex" action="{{route("auth.logout")}}" method="post" >
                        @csrf
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Kijelentkezés</button>
                    </form>
                </span>
            @else
                <a href="{{route("auth.login")}}" class="btn btn-outline-dark mx-3" type="button">Bejelentkezés</a>
                <a href="{{route("register.create")}}" class="btn btn-dark" type="button">Regisztráció</a>
            @endauth

        </div>
    </div>
</nav>
