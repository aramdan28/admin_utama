<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');

        // $data = [
        //     'title' =>  'Home',
        //     'isi'   =>  'home'

        // ];
        // return view('')
    }
}
