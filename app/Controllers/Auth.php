<?php

namespace App\Controllers;

class Auth extends BaseController
{

    public function login()
    {
        $data = [
            'user' => 'Fathu',
            'pass' => 'admin'
        ];
        return view('login', $data);
    }

    public function cek_login()
    {
        $request = service('request');
        $user = $request->getpost('uname');
        $password = $request->getpost('psw');
        echo $user . '<br>';
        echo $password;
    }
}
