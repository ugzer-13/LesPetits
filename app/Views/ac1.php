<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La récré à tout âge</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Lien vers votre fichier CSS personnalisé -->
</head>

<body>
    <!-- En-tête -->
    <header class="text-center p-2">
        <div class="container">
            <p class="text-muted">BIENVENUE - Livraison offerte à partir de 60€ - 07 23 45 67 89</p>
        </div>
    </header>

    <!-- Logo et Barre de recherche -->
    <div class="container text-center">
        <img src="images/logo.png" alt="Logo" class="my-3">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Rechercher...">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">🔍</button>
            </div>
        </div>
    </div>

    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item"><a href="#" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Catégories</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Âges</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Marques</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Qui sommes-nous ?</a></li>
            </ul>
            <div class="navbar-text">
                <a href="#" class="mr-3">Mon compte</a>
                <a href="#" class="mr-3">Panier</a>
                <a href="#">Favoris</a>
            </div>
        </div>
    </nav>

    <!-- Section PROMOTIONS -->
    <section class="promotions my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card p-3 text-center">
                        <h5>PROMOTIONS</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-secondary">←</button>
                            <img src="images/archetecture lego.jpeg" alt="LEGO Promo" class="img-fluid">
                            <img src="images/th (1).jpeg" alt="LEGO Promo" class="img-fluid">
                            <button class="btn btn-outline-secondary">→</button>
                        </div>
                        <p>LEGO 123€</p>
                        <p>LEGO 77€</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card p-3 text-center">
                        <h5>Notre sélection</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <button class="btn btn-outline-secondary">←</button>
                            <img src="images/lego.jpeg" alt="LEGO Sélection" class="img-fluid">
                            <img src="images/tour.jpeg" alt="LEGO Sélection" class="img-fluid">
                            <button class="btn btn-outline-secondary">→</button>
                        </div>
                        <p>LEGO 123€</p>
                        <p>LEGO 77€</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section ÂGES -->
    <section class="ages my-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="images/0-2.jpeg" alt="0-3 ans" class="img-fluid">
                        <p class="mt-3">0-3 ans</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="images/4-9.jpeg" alt="4-9 ans" class="img-fluid">
                        <p class="mt-3">4-9 ans</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="images/10-15.jpeg" alt="10-15 ans" class="img-fluid">
                        <p class="mt-3">10-15 ans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pied de page -->
    <footer class="bg-light py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <p>Catégories</p>
                    <ul class="list-unstyled">
                        <li>Jeux de société</li>
                        <li>Jeux d'extérieur</li>
                        <li>Jeux sportifs</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Marques</p>
                    <ul class="list-unstyled">
                        <li>LEGO</li>
                        <li>Playmobil</li>
                        <li>Mattel</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <p>Suivez-nous !</p>
                    <a href="#"><img src="icon_facebook.png" alt="Facebook" class="mr-2"></a>
                    <a href="#"><img src="icon_instagram.png" alt="Instagram"></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>