<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LivreController extends BaseController
{
    public function index()
    {
        return view("LivreView");
    }

   
}

