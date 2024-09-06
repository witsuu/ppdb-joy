<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Data admin yang ingin ditambahkan
        $data = [
            'name'       => 'Admin',
            'email'      => 'admin@app.com',
            'password'   => password_hash('Admin123', PASSWORD_DEFAULT), // Hash password
            'role'       => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        // Masukkan data ke dalam tabel users
        $this->db->table('users')->insert($data);
    }
}
