<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function login()
    {
        helper(['form']);

        // Proses ketika form dikirim
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required|min_length[6]|max_length[255]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/login', [
                    'validation' => $this->validator,
                    'title' => "Masuk"
                ]);
            }

            $userModel = new UserModel();
            $user = $userModel->where('email', $this->request->getVar('email'))->first();

            if ($user) {
                $password = $this->request->getVar('password');
                $verifyPassword = password_verify($password, $user['password']);

                if ($verifyPassword) {
                    // Pengecekan role di sini
                    $role = $user['role'];

                    if ($role == 'admin') {
                        // Jika role adalah admin
                        $session = session();
                        $session->set([
                            'user_id' => $user['id'],
                            'user_name' => $user['name'],
                            'user_role' => $role,
                            'isLoggedIn' => true
                        ]);
                        return redirect()->to('/admin/dashboard');
                    } elseif ($role == 'user') {
                        // Jika role adalah user
                        $session = session();
                        $session->set([
                            'user_id' => $user['id'],
                            'user_name' => $user['name'],
                            'user_role' => $role,
                            'isLoggedIn' => true
                        ]);
                        return redirect()->to('/user/dashboard');
                    } else {
                        // Role tidak dikenal
                        return redirect()->back()->with('error', 'Role tidak diizinkan');
                    }
                } else {
                    return redirect()->back()->with('error', 'Password salah');
                }
            } else {
                return redirect()->back()->with('error', 'Email tidak ditemukan');
            }
        }

        return view('auth/login', [
            'title' => 'Masuk'
        ]);
    }

    public function register()
    {
        helper(['form']);

        // Proses saat form dikirim
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'name' => 'required|min_length[3]|max_length[100]',
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (!$this->validate($rules)) {
                return view('auth/register', [
                    'validation' => $this->validator,
                    'title' => 'Daftar'
                ]);
            }

            // Insert user ke database
            $userModel = new UserModel();
            $data = [
                'name' => $this->request->getVar('name'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'role' => 'user',  // Default role adalah 'user'
            ];
            $userModel->save($data);

            return redirect()->to('/login')->with('success', 'Berhasil mendaftar, silahkan masuk.');
        }

        return view('auth/register', [
            'title' => 'Daftar'
        ]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
