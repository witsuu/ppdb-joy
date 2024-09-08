<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PengumumanModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pengumuman extends BaseController
{
    protected $pengumumanModel;

    public function __construct()
    {
        // Inisialisasi model
        $this->pengumumanModel = new PengumumanModel();
    }

    public function index()
    {
        $pengumuman = $this->pengumumanModel->orderBy('created_at', 'desc')->findAll();

        return view('admin/pengumuman', [
            'title' => 'Pengumuman PSB',
            'semua_pengumuman' => $pengumuman
        ]);
    }
    public function detail($id)
    {
        $pengumuman = $this->pengumumanModel->find($id);

        return view('admin/detail_pengumuman', [
            'title' => 'Pengumuman PSB',
            'pengumuman' => $pengumuman
        ]);
    }

    public function store()
    {
        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'judul' => 'required|min_length[3]|max_length[255]',
            'isi' => 'required|min_length[10]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
        ];

        // Simpan data ke database
        $this->pengumumanModel->insert($data);

        // Redirect ke halaman sukses atau pengumuman
        return redirect()->to('/admin/pengumuman')->with('success', 'Pengumuman berhasil ditambahkan');
    }

    // Fungsi untuk memperbarui pengumuman
    public function update($id)
    {
        // Validasi input
        $validation = \Config\Services::validation();

        $validation->setRules([
            'judul' => 'required|min_length[3]|max_length[255]',
            'isi' => 'required|min_length[10]',
        ]);

        if (!$this->validate($validation->getRules())) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $data = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
        ];

        // Update data di database
        $this->pengumumanModel->update($id, $data);

        // Redirect ke halaman sukses atau pengumuman
        return redirect()->back()->with('success', 'Pengumuman berhasil diperbarui');
    }

    public function delete($id)
    {
        // Cek apakah pengumuman ada
        $pengumuman = $this->pengumumanModel->find($id);
        if (!$pengumuman) {
            return redirect()->to('/admin/pengumuman')->with('error', 'Pengumuman tidak ditemukan');
        }

        // Hapus pengumuman berdasarkan ID
        $this->pengumumanModel->delete($id);

        // Redirect dengan pesan sukses
        return redirect()->to('/admin/pengumuman')->with('success', 'Pengumuman berhasil dihapus');
    }
}
