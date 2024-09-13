<?php
namespace App\Models;
use CodeIgniter\Model;


class UtilisateurModel extends Model
{
    protected $table='utilisateur';
    protected $primaryKey = 'idutilisateur';
    protected $useAutoIncrement=true;
    protected $allowedFields=['email_utilisateur','mdp_utilisateur','idrole'];

    public function ListAllUtilisateurs():array
    {
        //Equivalent à SELECT * FROM utilisateur
        $users=$this->get()->getResult();
        return $users;

    }
    public function ListOneUtilisateur(int $idutilisateur):object 
    { //Equivalent à SELECT * FROM utilisateur where idutilisateur=$idutilisateur
        $user=$this->where('idutilisateur',$idutilisateur)->get()->getRow();
        return $user;
    }
    
    
   public function ListEmailUtilisateur(int $limit):array 
    {
        $users=$this->select('email_utilisateur')->orderBy('email_utilisateur','ASC')->limit($limit)->get()->getResult();
        return $users;
    }
    public function insertUtilisateur(array $data):bool 
    {
        return $this->insert($data);
    }
    public function updateUtilisateur(array $data,int $idutilisateur):bool 
    {
        return $this->where('idutilisateur',$idutilisateur )-> update(null,$data);
    }
    public function deleteUtilisateur(int $idutilisateur):bool 
    {
        return $this->delete(['idutilisateur'=>$idutilisateur]);
    }
    

}



