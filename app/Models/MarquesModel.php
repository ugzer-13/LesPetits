<?php

namespace App\Models;

use CodeIgniter\Model;

class MarquesModel extends Model
{
    protected $table = 'marque';
    protected $primaryKey = 'idmarque';
    protected $useAutoIncrement = 'true';
    protected $allowedFields = ['nom_marque','description_marque'];

    public function ListeMarques():array {
        $marques = $this->get()->getResult();
        return $marques;
    }
    public function ListeUneMarque(int $idmarque):object {
        $marque = $this->where('idmarque', $idmarque)->get()->getRow();
        return $marque;
    }

    public function ListeProduitsByMarque(int $idmarque):array {
        $produits = $this->select('idproduit,nom_produit')->join('marque','marque.idmarque=produit.idmarque')->where('idmarque', $idmarque)->get()->getResult();
        return $produits;
    }
}
