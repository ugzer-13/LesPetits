<?php

namespace App\Controllers;

class Ages extends BaseController

{
    private $model;
    protected $request;
    public function __construct() {
        $this->model = model('AgeModel');
        $this->request = \config\Services::request();
    }

    public function GetAges(): string
    {
        $data = [
            'ages' => $this->model->ListAges()
        ];
        return view('ages', $data);
    }
    
    public function GetAgeByID(int $idtranche): string
    {
        $data = [
            "age" => $this->model->ListoneAge($idtranche)
        ];
        return view('age', $data);
    }
}