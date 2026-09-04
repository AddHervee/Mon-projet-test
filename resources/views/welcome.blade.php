
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Projet Test</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #000000;
            color: #d6dce8;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .nav-links {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        .nav-links a {
            margin-left: 15px;
            text-decoration: none;
            color: #4a5568;
            font-weight: 600;
        }
        .nav-links a:hover {
            color: #4e607d;
        }
        .container {
            text-align: center;
            background: none;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #3f4247;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.2rem;
            color: #2c3959;
        }
    </style>
</head>
<body>

    <!-- Boutons de connexion dynamiques -->
    <div class="nav-links">
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Tableau de bord</a>
            @else
                <a href="{{ route('login') }}">Connexion</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Inscription</a>
                @endif
            @endauth
        @endif
    </div>

    <div class="container">
        <h1>Bienvenue sur mon site pour auto-entrepreneurs</strong></h1>
        <p>Ce site vous permettra de trouver de bons Jobs étudiants</p>
    </div>
</body>
</html>