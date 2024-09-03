<?php

namespace App\Controllers;

class Produits extends BaseController
{

    private $model;
    protected $request;
    public function __construct()
    {
        $this->model = model('ProduitsModel');
        $this->request = \config\Services::request();
    }

    public function GetProduits(): string
    {
        $data = [
            'produits' => $this->model->ListeProduits()
        ];
        return view('produits', $data);
    }


    public function GetProduitByID(int $idproduit): string
    {
        $data = [
            "produit" => $this->model->ListeUnProduit($idproduit)
        ];
        return view('produit', $data);
    }
    public function GetProduitsByMarque(int $idmarque):string
    {
        $data = [
            'produits' => $this->model->ListeProduits($idmarque),
            'marque'=>$this->model->ListeUneMarque($idmarque)
        ];
        return view('produit', $data); 
    }
}
