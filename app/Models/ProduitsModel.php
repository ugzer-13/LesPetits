<?php

namespace App\Models;

use CodeIgniter\Model;

class ProduitsModel extends Model
{
    protected $table = 'produit';
    protected $primaryKey = 'idproduit';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['nom_produit', 'description_produit','photo_produit','prix_produit','sku', 'stock','idmarque'];

    public function ListeProduits():array {
        $produits = $this->get()->getResult();
        return $produits;
    }

    public function ListeUnProduit(int $idproduit):object {
        $produit = $this->where('idproduit', $idproduit)->get()->getRow();
        return $produit;
    }
    
}
