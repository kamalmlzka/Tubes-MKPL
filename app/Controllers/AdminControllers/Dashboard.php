<?php

namespace App\Controllers\AdminControllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        return view('adminPages/dashboard');
    }
}
