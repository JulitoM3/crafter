<nav class="navbar navbar-expand-lg" data-bs-theme="dark" style="background-color: #6868AC">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/konf.PNG') }}" alt="Konfety img">
        </a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <x-nav-item path="home">Inicio</x-nav-item>

            </ul>
            <ul class="navbar-nav flex-row flex-wrap ms-md-auto">
                <li class="nav-item col-6 col-lg-auto text-white px-4 justify-content-center align-items-center">
                    <p class="m-0">

                    </p>
                </li>
                <li class="nav-item col-6 col-lg-auto">
                    <form action='/logout' method='POST'>
                        @csrf
                        <button type="submit" class="btn btn-light">Cerrar sesión</button>
                    </form>
                </li>
            </ul>

        </div>
    </div>
</nav>
