<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Selamat datang di Website kami'
        ];
        return view('landing', $data);
    }
}
