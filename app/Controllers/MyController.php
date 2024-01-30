<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MyController extends BaseController
{
    public function index()
    {
        return view("website/index");
        return view("layouts/main");
    }

    public function aboutMe()
    {
        return view("website/aboutMe");
    }

    public function education()
    {
        return view("website/education");
    }
}
