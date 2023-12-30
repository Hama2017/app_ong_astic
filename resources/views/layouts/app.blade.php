<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ route('regions.index') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('regions*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('regions.index') }}">Régions</a>
                </li>
                <li class="nav-item {{ request()->is('inspection_academies*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('inspection_academies.index') }}">Inspection Académies</a>
                </li>
                <li class="nav-item {{ request()->is('departements*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('departements.index') }}">Départements</a>
                </li>
                <li class="nav-item dropdown {{ request()->is('etablissement_scolaires*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Établissements Scolaires
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('etablissement_scolaires.index') }}">Liste</a>
                        <a class="dropdown-item" href="{{ route('etablissement_scolaires.create') }}">Ajouter</a>
                        <!-- Ajoutez d'autres liens de sous-menu au besoin -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
