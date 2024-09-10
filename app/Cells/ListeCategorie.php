<?php

namespace App\Cells;

class ListeCategorie
{

    public function getListeCategorie()
    {
        $model = model('CategorieModel');
        $liste['xx'] = $model->listAllCategorie();
        return view('Cells/listeCategorie', $liste);
    }
}
