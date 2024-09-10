<?php

namespace App\Models;
use CodeIgniter\Model;

class CategorieModel extends Model
{
    protected $table ='categorie';
    protected $primaryKey ='idcategorie';
    protected $useAutoIncrement =true;
    protected $allowedFields = ['nom_categorie'];


     public function listAllCategorie():array
 {     $categories = $this->get()->getResult();
    return $categories;
 }
public function listOneCategorie(int $idcategorie):object 
{

    $categorie =$this->where('idcategorie',$idcategorie)->get()->getRow();
    return $categorie;
}
public function insertCategorie(array $data):bool 
    {
        return $this->insert($data);
    }
public function deleteCategorie(int $idcategorie):bool 
{
    return $this->delete(['idcategorie'=>$idcategorie]);
}
}