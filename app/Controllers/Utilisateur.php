<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class Utilisateur extends BaseController
{
    private $model;
    protected $request;
    public function __construct()
    {
        $this->model = model('UtilisateurModel');
        $this->request = \config\Services::request();
        helper('form');
    }
    public function getAllUtilisateur(): string
    {
        $data = [
            "utilisateurs" => $this->model->ListAllUtilisateurs()
        ];
        //ou $data["utilisateur"]=$this->model->ListAllUtilisateurs()
        return view('Utilisateur/getAllUtilisateur', $data);
    }
    public function getOneUtilisateur(int $idutilisateur): string
    {
        $data = [
            "utilisateur" => $this->model->ListOneUtilisateur($idutilisateur)
        ];
        return view('Utilisateur/getOneUtilisateur', $data);
    }

    public function suputilisateur(int $idutilisateur): string
    {
        $x = $this->model->deleteUtilisateur($idutilisateur);
        var_dump($x);
        return view('succes');
    }
    public function getEmailUtilisateur(int $limit): string
    {
        $data = [
            "utilisateurs" => $this->model->ListEmailUtilisateur($limit)
        ];
        return view('Utilisateur/getEmailUtilisateur', $data);
    }
    public function addUtilisateur(): string
    {
        if ($this->request->is('post') == false) {
            return view('Utilisateur/addutilisateur');
        }
        $rules = [
            "email_utilisateur" => [
                "label" => "email",
                "rules" => "valid_email|required",
                "errors" => [
                    "valid_email" => "email non valide",
                    "required" => " obligatoire"
                ]
            ],
            "mdp_utilisateur" => [
                "label" => "mdp_utilisateur",
                "rules" => "required|max_length[255]|min_length[2]",
                "errors" => [
                    "min_length" => "Minimum 10 caractères",
                    "max_length" => "Maximum 255 caractères",
                    "required" => "mot_pass obligatoire"
                ]
            ]
        ];
        if ($this->validate($rules) == false) {
            return view('Utilisateur/addutilisateur');
        }

        $email = $this->request->getPostGet('email_utilisateur');

        $mdp_utilisateur = (string) $this->request->getPostGet('mdp_utilisateur');

        $role = 1;
        $data = [

            "email" => $email,
            "mdp_utilisateur" => password_hash($mdp_utilisateur, PASSWORD_DEFAULT),



        ];
        $this->model->insertUtilisateur($data);
        return view('accueil', $data);
    }

    public function majUtilisateur(int $idutilisateur): string
    {
        $data1 =
            [
                'utilisateur' => $this->model->listOneUtilisateur($idutilisateur)
            ];
        if ($this->request->is('post') == false) {
            return view('Utilisateur/majUtilisateur', $data1);
        }
        $rules = [

            "email_utilisateur" => [
                "label" => "email_utilisateur",
                "rules" => "valid_email|required",
                "errors" => [
                    "valid_email" => "email non valid",
                    "required" => "email obligatoire"
                ]
            ]
        ];
        if ($this->validate($rules) == false) {
            return view('Utilisateur/majUtilisateur', $data1);
        }

        $data = [
            "email_utilisateur" => $this->request->getPostGet('email_utilisateur')
        ];

        $this->model->updateUtilisateur($data, $idutilisateur);
        return view('succes');
    }
}
