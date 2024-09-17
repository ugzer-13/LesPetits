<?php

namespace App\Cells;

class ListeMenu
{

    public function getListe($modele)
    {
        if ($modele == 'categorie') {
            $model = model('CategorieModel');
            $liste['contenu'] = $model->listAllCategorie();
            return view('Cells/liste', $liste);
        }
        if ($modele == 'marque') {
            $model = model('MarquesModel');
            $liste['contenu'] = $model->listeMarques();
            return view('Cells/liste', $liste);
        }
        if ($modele == 'age') {
            $model = model('AgeModel');
            $liste['contenu'] = $model->listAges();
            return view('Cells/liste', $liste);
        }
    }
}
