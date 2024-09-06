<?php

namespace App\Controllers\Admin;

class Dashboard extends \App\Controllers\BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        return view('admin/dashboard');
    }
}
