<?php
namespace App\Models;
use CodeIgniter\Model;


class AgeModel extends Model
{
    protected $table='tranche_age';
    protected $primaryKey = 'idtranche';
    protected $useAutoIncrement=true;
    protected $allowedFields=['description'];

    public function ListAges():array
    {
        //Equivalent à SELECT * FROM utilisateur
        $ages=$this->get()->getResult();
        return $ages;
    
    }
    public function ListoneAge(int $idtranche):object {
        $age = $this->where('idtranche', $idtranche)->get()->getRow();
        return $age;
    }
}