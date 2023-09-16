<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\Controllers\BaseController;


class MainController extends BaseController
{
    public function index()
    {
        $main = new MainModel();
        $data ['st'] = $main->findAll();
        return view('main', $data);
    }
}
