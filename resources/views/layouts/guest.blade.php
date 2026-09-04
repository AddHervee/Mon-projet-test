<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion / Inscription</title>

    <!-- Fonts (Style d'écriture) -->
    <link rel="preconnect" href="https://bunny.net">
    <link href="https://bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        /* =======================================================
           ZONE 1 : CONFIGURATION GÉNÉRALE DES COULEURS DES TEXTES
           ======================================================= */
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            padding: 0;
            /* Modifiez la couleur générale de TOUS les textes ici */
            color: #ffffff; 
        }

        /* =======================================================
           ZONE 2 : LE FOND DE LA PAGE (L'ARRIÈRE-PLAN GLOBAL)
           ======================================================= */
        .page-background {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            /* MODIFIEZ LA COULEUR DE FOND DE LA PAGE ICI */
            background-color: #2e2b38; 
        }

        /* =======================================================
           ZONE 3 : L'ESPACE OÙ ON ÉCRIT (LE BLOC DU FORMULAIRE)
           ======================================================= */
        .form-box {
            width: 100%;
            max-width: 450px; /* Largeur de la boîte */
            padding: 30px;
            border-radius: 16px; /* Coins arrondis */
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); /* Ombre sous la boîte */
            
            /* ESPACE AU-DESSUS DE LA BOÎTE : Augmentez ou baissez les pixels (px) */
            margin-top: 50px; 
            
            /* MODIFIEZ LA COULEUR DE LA BOÎTE DU FORMULAIRE ICI */
            background-color: #3f3b4d; 
        }

        /* ZONE LOGO */
        .logo-container {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <!-- Application du fond global -->
    <div class="page-background">
        
        <!-- Affichage du Logo -->
        <div class="logo-container">
            <a href="/">
                <!-- C'est ici que s'affiche le logo ou votre texte de remplacement -->
                <x-application-logo style="width: 80px; height: 80px; fill: currentColor;" />
            </a>
        </div>

        <!-- Application de la boîte blanche/sombre où on écrit -->
        <div class="form-box">
            
            <!-- Cette ligne magique charge le formulaire de saisie (Nom, Email, Mots de passe...) -->
            {{ $slot }}
            
        </div>

    </div>

</body>
</html>