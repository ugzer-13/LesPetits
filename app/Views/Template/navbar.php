<div id="navbar">
    <ul class="menu-top">
        <li class="lien-nav"><a href="/"> Accueil</a></li>
        <li class="lien-nav hover"><a href="/categories">Catégories</a>
            <ul class="menu-contenu">
                <li>
                    <?= view_cell('App\Cells\ListeMenu::getListe', 'modele=categorie') ?>
                </li>
            </ul>
        </li>
        <li class="lien-nav hover"><a href="/ages">Ages</a>
            <ul class="menu-contenu">
                <li>
                    <?= view_cell('App\Cells\ListeMenu::getListe', 'modele=age') ?>
                </li>
            </ul>
        </li>
        <li class="lien-nav hover"><a href="/marques">Marques</a>
            <ul class="menu-contenu">
                <li>
                    <?= view_cell('App\Cells\ListeMenu::getListe', 'modele=marque') ?>
                </li>
            </ul>
        </li>
        <li class="lien-nav">Qui sommes-nous ?</li>
    </ul>
</div>