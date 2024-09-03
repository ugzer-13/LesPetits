<?php

namespace App\Controllers;

class Marques extends BaseController
{

    private $model;
    protected $request;
    public function __construct() {
        $this->model = model('MarquesModel');
        $this->request = \config\Services::request();
    }

    public function GetMarques(): string
    {
        $data = [
            'marques' => $this->model->ListeMarques()
        ];
        return view('marques', $data);
    }
    
    public function GetMarqueByID(int $idmarque): string
    {
        $data = [
            "marque" => $this->model->ListeUneMarque($idmarque)
        ];
        return view('marque', $data);
    }

    public function GetProduitsByMarque(int $idmarque): string
    {
        $data = [
            'produits'=>$this->model->ListeProduitsByMarque($idmarque)
        ];
        return view('produitsparmarque', $data);
    }
}
