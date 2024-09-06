<?php

namespace App\Controllers\User;

use App\Models\DokumenPesertaModel;
use App\Models\InformasiAyahModel;
use App\Models\InformasiIbuModel;
use App\Models\InformasiPesertaModel;
use App\Models\UserModel;

class Dashboard extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('user/dashboard');
    }

    public function show_ppdb()
    {
        $userModel = new UserModel();

        $userId = session()->get('user_id');
        $userPpdb = $userModel->getUserInformation($userId);

        // dd($userPpdb['informasiPeserta']);

        return view('user/ppdb', [
            "title" => "Pendaftaran Peserta Didik Baru (PPDB)",
            'userPpdb' => $userPpdb
        ]);
    }
    public function store_ppdb()
    {
        // Load model
        $pesertaModel = new InformasiPesertaModel();
        $ayahModel = new InformasiAyahModel();
        $ibuModel = new InformasiIbuModel();
        $dokumenModel = new DokumenPesertaModel();

        // Validasi form
        $validationRules = [
            'nik' => 'required|numeric|min_length[16]|max_length[16]',
            'jenjang_pendidikan' => 'required',
            'nama_panggilan' => 'required|min_length[2]',
            'no_kk' => 'required|numeric|min_length[16]|max_length[16]',
            'tempat_lahir' => 'required|min_length[3]',
            'tanggal_lahir' => 'required|valid_date',
            'asal_sekolah' => 'required|min_length[3]',
            'anak_ke' => 'required|numeric',
            'jumlah_anak' => 'required|numeric',
            'alamat_lengkap' => 'required|min_length[5]',
            'no_hp' => 'required|numeric|min_length[10]|max_length[13]',
            'nama_ayah' => 'required|min_length[3]',
            'nik_ayah' => 'required|numeric|min_length[16]|max_length[16]',
            'pekerjaan_ayah' => 'required|min_length[3]',
            'pendapatan_ayah' => 'required|numeric',
            'pendidikan_ayah' => 'required|min_length[2]',
            'tempat_lahir_ayah' => 'required|min_length[3]',
            'tanggal_lahir_ayah' => 'required|valid_date',
            'noHp_ayah' => 'required|numeric|min_length[10]|max_length[13]',
            'nama_ibu' => 'required|min_length[3]',
            'nik_ibu' => 'required|numeric|min_length[16]|max_length[16]',
            'pekerjaan_ibu' => 'required|min_length[3]',
            'pendapatan_ibu' => 'required|numeric',
            'pendidikan_ibu' => 'required|min_length[2]',
            'tempat_lahir_ibu' => 'required|min_length[3]',
            'tanggal_lahir_ibu' => 'required|valid_date',
            'noHp_ibu' => 'required|numeric|min_length[10]|max_length[13]',
            'foto' => 'uploaded[foto]|max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'foto_akte' => 'uploaded[foto_akte]|max_size[foto_akte,2048]|is_image[foto_akte]|mime_in[foto_akte,image/jpg,image/jpeg,image/png]',
            'foto_kk' => 'uploaded[foto_kk]|max_size[foto_kk,2048]|is_image[foto_kk]|mime_in[foto_kk,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validationRules)) {
            // Jika validasi gagal, kembalikan ke form
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user_id = session()->get('user_id');

        // Ambil data dari request
        $dataPeserta = [
            'nik' => $this->request->getPost('nik'),
            'jenjang_pendidikan' => $this->request->getPost('jenjang_pendidikan'),
            'nama_panggilan' => $this->request->getPost('nama_panggilan'),
            'no_kartu_keluarga' => $this->request->getPost('no_kartu_keluarga'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'asal_sekolah' => $this->request->getPost('asal_sekolah'),
            'anak_ke' => $this->request->getPost('anak_ke'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'no_hp' => $this->request->getPost('no_hp'),
            'user_id' => $user_id,
        ];

        // Simpan data ke database
        $pesertaModel->insert($dataPeserta);

        // Ambil data dari request
        $dataAyah = [
            'nama' => $this->request->getPost('nama_ayah'),
            'nik' => $this->request->getPost('nik_ayah'),
            'pekerjaan' => $this->request->getPost('pekerjaan_ayah'),
            'pendapatan' => $this->request->getPost('pendapatan_ayah'),
            'pendidikan' => $this->request->getPost('pendidikan_ayah'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir_ayah'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir_ayah'),
            'no_hp' => $this->request->getPost('noHp_ayah'),
            'user_id' => $user_id
        ];

        // Simpan data ke database
        $ayahModel->insert($dataAyah);

        // Ambil data dari request
        $dataIbu = [
            'nama' => $this->request->getPost('nama_ibu'),
            'nik' => $this->request->getPost('nik_ibu'),
            'pekerjaan' => $this->request->getPost('pekerjaan_ibu'),
            'pendapatan' => $this->request->getPost('pendapatan_ibu'),
            'pendidikan' => $this->request->getPost('pendidikan_ibu'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir_ibu'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir_ibu'),
            'no_hp' => $this->request->getPost('noHp_ibu'),
            'user_id' => $user_id
        ];

        // Simpan data ke database
        $ibuModel->insert($dataIbu);

        // Ambil file dari request
        $foto = $this->request->getFile('foto');
        $fotoAkte = $this->request->getFile('foto_akte');
        $fotoKK = $this->request->getFile('foto_kk');

        // Pindahkan file ke direktori 'uploads'
        $fotoName = $foto->getRandomName();
        $fotoAkteName = $fotoAkte->getRandomName();
        $fotoKKName = $fotoKK->getRandomName();

        $foto->move(WRITEPATH . 'uploads/documents', $fotoName);
        $fotoAkte->move(WRITEPATH . 'uploads/documents', $fotoAkteName);
        $fotoKK->move(WRITEPATH . '/uploads/documents', $fotoKKName);

        // Simpan nama file ke database
        $data = [
            'foto' => $fotoName,
            'foto_akte' => $fotoAkteName,
            'foto_kk' => $fotoKKName,
            'user_id' => $user_id
        ];

        // Simpan data ke database
        $dokumenModel->insert($data);

        // Redirect ke halaman sukses atau halaman lain
        return redirect()->to('/user/ppdb')->with('success', 'Data peserta berhasil disimpan');
    }

    public function update_ppdb($id)
    {
        // Load model
        $pesertaModel = new InformasiPesertaModel();
        $ayahModel = new InformasiAyahModel();
        $ibuModel = new InformasiIbuModel();
        $dokumenModel = new DokumenPesertaModel();

        // Validasi form
        $validationRules = [
            'nik' => 'required|numeric|min_length[16]|max_length[16]',
            'jenjang_pendidikan' => 'required',
            'nama_panggilan' => 'required|min_length[2]',
            'no_kk' => 'required|numeric|min_length[16]|max_length[16]',
            'tempat_lahir' => 'required|min_length[3]',
            'tanggal_lahir' => 'required|valid_date',
            'asal_sekolah' => 'required|min_length[3]',
            'anak_ke' => 'required|numeric',
            'jumlah_anak' => 'required|numeric',
            'alamat_lengkap' => 'required|min_length[5]',
            'no_hp' => 'required|numeric|min_length[10]|max_length[13]',
            'nama_ayah' => 'required|min_length[3]',
            'nik_ayah' => 'required|numeric|min_length[16]|max_length[16]',
            'pekerjaan_ayah' => 'required|min_length[3]',
            'pendapatan_ayah' => 'required|numeric',
            'pendidikan_ayah' => 'required|min_length[2]',
            'tempat_lahir_ayah' => 'required|min_length[3]',
            'tanggal_lahir_ayah' => 'required|valid_date',
            'noHp_ayah' => 'required|numeric|min_length[10]|max_length[13]',
            'nama_ibu' => 'required|min_length[3]',
            'nik_ibu' => 'required|numeric|min_length[16]|max_length[16]',
            'pekerjaan_ibu' => 'required|min_length[3]',
            'pendapatan_ibu' => 'required|numeric',
            'pendidikan_ibu' => 'required|min_length[2]',
            'tempat_lahir_ibu' => 'required|min_length[3]',
            'tanggal_lahir_ibu' => 'required|valid_date',
            'noHp_ibu' => 'required|numeric|min_length[10]|max_length[13]',
            'foto' => 'permit_empty|max_size[foto,2048]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
            'foto_akte' => 'permit_empty|max_size[foto_akte,2048]|is_image[foto_akte]|mime_in[foto_akte,image/jpg,image/jpeg,image/png]',
            'foto_kk' => 'permit_empty|max_size[foto_kk,2048]|is_image[foto_kk]|mime_in[foto_kk,image/jpg,image/jpeg,image/png]'
        ];

        if (!$this->validate($validationRules)) {
            // Jika validasi gagal, kembalikan ke form
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $user_id = $id;

        // Ambil data dari request
        $dataPeserta = [
            'nik' => $this->request->getPost('nik'),
            'no_kk' => $this->request->getPost('no_kk'),
            'jenjang_pendidikan' => $this->request->getPost('jenjang_pendidikan'),
            'nama_panggilan' => $this->request->getPost('nama_panggilan'),
            'no_kartu_keluarga' => $this->request->getPost('no_kartu_keluarga'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'asal_sekolah' => $this->request->getPost('asal_sekolah'),
            'anak_ke' => $this->request->getPost('anak_ke'),
            'jumlah_anak' => $this->request->getPost('jumlah_anak'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'no_hp' => $this->request->getPost('no_hp'),
            'user_id' => $user_id,
        ];

        // Ambil data dari request
        $dataAyah = [
            'nama' => $this->request->getPost('nama_ayah'),
            'nik' => $this->request->getPost('nik_ayah'),
            'pekerjaan' => $this->request->getPost('pekerjaan_ayah'),
            'pendapatan' => $this->request->getPost('pendapatan_ayah'),
            'pendidikan' => $this->request->getPost('pendidikan_ayah'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir_ayah'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir_ayah'),
            'no_hp' => $this->request->getPost('noHp_ayah'),
            'user_id' => $user_id
        ];

        // Ambil data dari request
        $dataIbu = [
            'nama' => $this->request->getPost('nama_ibu'),
            'nik' => $this->request->getPost('nik_ibu'),
            'pekerjaan' => $this->request->getPost('pekerjaan_ibu'),
            'pendapatan' => $this->request->getPost('pendapatan_ibu'),
            'pendidikan' => $this->request->getPost('pendidikan_ibu'),
            'tempat_lahir' => $this->request->getPost('tempat_lahir_ibu'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir_ibu'),
            'no_hp' => $this->request->getPost('noHp_ibu'),
            'user_id' => $user_id
        ];

        $dokumenData = [];

        // Ambil file dari request
        $foto = $this->request->getFile('foto');
        $fotoAkte = $this->request->getFile('foto_akte');
        $fotoKK = $this->request->getFile('foto_kk');

        // Cek apakah ada file gambar yang diupload
        if ($foto) {
            if ($foto->isValid() && !$foto->hasMoved()) {
                $newName = $foto->getRandomName();
                $foto->move(WRITEPATH . 'uploads/documents', $newName);
                $dokumenData['foto'] = $newName;
            }
        }
        if ($fotoAkte) {
            if ($fotoAkte->isValid() && !$fotoAkte->hasMoved()) {
                $newName = $fotoAkte->getRandomName();
                $fotoAkte->move(WRITEPATH . 'uploads/documents', $newName);
                $dokumenData['foto_akte'] = $newName;
            }
        }
        if ($fotoKK) {
            if ($fotoKK->isValid() && !$fotoKK->hasMoved()) {
                $newName = $fotoKK->getRandomName();
                $fotoKK->move(WRITEPATH . 'uploads/documents', $newName);
                $dokumenData['foto_kk'] = $newName;
            }
        }

        // Simpan data ke database
        // Update data di masing-masing tabel
        $pesertaModel->where('user_id', $user_id)->set($dataPeserta)->update();
        $ayahModel->where('user_id', $user_id)->set($dataAyah)->update();
        $ibuModel->where('user_id', $user_id)->set($dataIbu)->update();

        if ($foto->isValid() || $fotoAkte->isValid() || $fotoKK->isValid()) {
            $dokumenModel->where('user_id', $user_id)->set($dokumenData)->update();
        }

        // Redirect ke halaman sukses atau halaman lain
        return redirect()->to('/user/ppdb')->with('success', 'Data peserta berhasil dirubah');
    }
}
