<x-app-layout>
    <div style="min-height: 100vh; padding: 40px 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 30px;">
        
        <!-- TITRE DE LA PAGE -->
        <h2 style="font-size: 2rem; font-weight: bold; color: #ffffff; margin: 0; text-align: center;">
            Mon espace Privé
        </h2>

        <!-- LA BOÎTE CENTRALE UNIQUE -->
        <div style="width: 100%; max-width: 800px; padding: 30px; border-radius: 16px; background-color: #3f3b4d; box-shadow: 0 4px 15px rgba(0,0,0,0.3); color: #ffffff;">
            
            <h3 style="color: #3b82f6; margin-top: 0; font-size: 1.5rem;">Bienvenue sur votre espace !</h3>
            
            <p style="font-size: 1.1rem; line-height: 1.6; color: #e2e8f0;">
                Vous êtes connectée avec succès à votre compte. accédez aux offres en cliquant sur accéder aux produits !
            </p>

            <a href="#" style="display: inline-block; margin-top: 15px; padding: 12px 24px; background-color: #26292f; color: white; text-decoration: none; border-radius: 8px; font-weight: bold;">
                Accéder aux offres
            </a>

        </div>

        <!-- LE BOUTON ROUGE DE DÉCONNEXION TOUT EN BAS -->
        <form method="POST" action="{{ route('logout') }}" style="margin-top: 20px;">
            @csrf
            <button type="submit" style="background-color: #dc2626; color: white; border: none; padding: 12px 35px; font-size: 1rem; font-weight: bold; border-radius: 8px; cursor: pointer; box-shadow: 0 4px 10px rgba(220, 38, 38, 0.3);">
                Déconnexion
            </button>
        </form>

    </div>
</x-app-layout>