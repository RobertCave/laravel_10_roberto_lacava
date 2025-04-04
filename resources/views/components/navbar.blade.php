<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-2">
    <a class="navbar-brand">
        <img src="/images/logo.png" alt="Logo" height="40" class="px-3">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse p-2" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('homepage') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inserisciPost') }}">Scrivi un articolo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contattaci') }}">Contattaci</a>
            </li>
        </ul>

    </div>
</nav>
<!-- End Navbar -->
