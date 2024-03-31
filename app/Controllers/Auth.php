<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Auth extends BaseController
{
    public function login(): string
    {
        return view('auth/login'); // Menampilkan halaman login
    }
}

