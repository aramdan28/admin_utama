<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Guru extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        
        return view('guru/index', $data);
    }
}
