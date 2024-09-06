<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Pengguna extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getAllUserInformation();

        return view('admin/pengguna', [
            'title' => "Manajemen Pengguna",
            'users' => $users
        ]);
    }

    public function update($id)
    {
        // Load model
        $userModel = new UserModel();

        // Validasi input
        $validation = $this->validate([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'permit_empty|min_length[6]'
        ]);

        if (!$validation) {
            // Jika validasi gagal, kembalikan ke form dengan pesan error
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data input dari form
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email')
        ];

        // Jika ada password yang diinput, hash password dan tambahkan ke data
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // Update data user
        $userModel->update($id, $data);

        // Redirect ke halaman success atau halaman lain
        return redirect()->to('/admin/pengguna')->with('success', 'Data user berhasil diperbarui.');
    }

    public function delete($id)
    {
        // Load model
        $userModel = new UserModel();

        // Cari user berdasarkan ID
        $user = $userModel->find($id);

        // Cek apakah user ditemukan
        if (empty($user)) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        // Hapus user
        $userModel->delete($id);

        // Redirect dengan pesan sukses
        return redirect()->to('/admin/pengguna')->with('success', 'User berhasil dihapus.');
    }
}
