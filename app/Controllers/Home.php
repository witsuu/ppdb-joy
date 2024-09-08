<?php

namespace App\Controllers;

use App\Models\PengumumanModel;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Selamat datang di Website kami'
        ];
        return view('landing', $data);
    }

    public function exportView($id)
    {
        $userModel = new UserModel();
        $userPpdb = $userModel->getUserInformation($id);

        if (empty($userPpdb)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('exportLaporan', [
            'userPpdb' => $userPpdb
        ]);
    }

    public function all_pengumuman()
    {
        $pengumumanModel = new PengumumanModel();

        $pengumuman = $pengumumanModel->orderBy('created_at', 'desc')->findAll();

        return view('pengumuman', [
            'title' => 'Semua Pengumuman',
            'semua_pengumuman' => $pengumuman
        ]);
    }
    public function detail_pengumuman($id)
    {
        $pengumumanModel = new PengumumanModel();

        $pengumuman = $pengumumanModel->find($id);

        return view('detail_pengumuman', [
            'title' => $pengumuman['judul'],
            'pengumuman' => $pengumuman
        ]);
    }
}
