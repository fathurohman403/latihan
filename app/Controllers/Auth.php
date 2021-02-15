<?php

namespace App\Controllers;

class Auth extends BaseController
{

public function login()
{
    $data = [
        'user'=>'Fathu',
        'pass' => 'admin'
    ];
    return view('login',$data);
}
}