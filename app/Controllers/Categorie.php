<?php

namespace App\Controllers;
use CodeIgniter\I18n\Time;

class Categorie extends BaseController
{
    private $model;
protected $request;
    public function __construct()
    {
        $this->model = model('CategorieModel');
         $this->request = \config\Services::request();
        helper('form');
    }
    public function getAllCategorie():string
    {
       $data=
        [
            "categories"=> $this->model->listAllCategorie()
        ];
       
        return view('Categorie/getAllCategorie',$data);
    }
    public function getOneCategorie(int $idcategorie):object

    {
        $data = 
        [
            "categorie"=> $this->model->listOneCategorie($idcategorie)
        ];
        return view('Categorie/getOneCategorie',$data);
    }
    public function addCategorie():string 
    {
        $data = [
            "nom_categorie"=>"jeu de société"
            
        ];
        $this->model->insertCategorie($data);
        return view('accueil');

    }
  
    public function supCategorie(int $idcategorie):string 
    {
       
            
       
       $this->model->deleteCategorie($idcategorie);
      
        return view('accueil');

    }
    public function addCategorie2():string 
    {
        if($this->request->is('post')==false)
    {
        return view('Categorie/AddCategorie2');
    }
    $rules=[
        "nom_categorie"=>[
            "label"=>"nom_categorie",
            "rules"=>"min_length[2]|max_length[22]|required",
            "errors"=>[
               "min_length"=>"Minimum 2 caracteres",
                "max_length"=>"Maximum 22 caractères",
                "required"=>"nom_categorie obligatoire"
            ]
            ]
        
                
               
                
        
                ];
        if($this->validate($rules)==false){
        return view('Categorie/AddCategorie');
        }
                $categorie = $this->request->getPostGet('nom_categorie');
                
               
                
                $date_inscription=Time::now('Europe/Paris','fr_FR');
                $role=1;
                $data=[
                    "nom_categorie"=>$categorie,
                  
                    "date_inscription"=>$date_inscription,
                    "role"=>$role

                ];
                $this->model->insertCategorie($data);
                return view ('accueil',$data);

    }
    
}