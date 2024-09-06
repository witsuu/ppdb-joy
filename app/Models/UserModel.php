<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'role', 'created_at', 'updated_at'];
    protected $useTimestamps = true;

    // Kolom yang akan disembunyikan secara otomatis
    protected $hidden = ['password', 'role'];

    // Fungsi untuk melakukan join dari tabel users ke tabel lain
    public function getFullData($userId)
    {
        $data = $this->select('users.*, informasi_peserta.*, informasi_ayah.nama as nama_ayah, informasi_ibu.*, dokumen_peserta.*')
            ->join('informasi_peserta', 'informasi_peserta.user_id = users.id', 'left')
            ->join('informasi_ayah', 'informasi_ayah.user_id = users.id', 'left')
            ->join('informasi_ibu', 'informasi_ibu.user_id = users.id', 'left')
            ->join('dokumen_peserta', 'dokumen_peserta.user_id = users.id', 'left')
            ->where('users.id', $userId)
            ->first();

        if ($data['password'] && $data['role']) {
            unset($data['password']);
            unset($data['role']);
        }

        return $data;
    }

    public function getUserInformation($userId)
    {
        $db      = \Config\Database::connect();

        $dataUser = $this->find($userId);
        $dataInformasiPeserta = $db->table('informasi_peserta')->where('user_id', $userId)->get()->getResultArray();
        $dataInformasiAyah = $db->table('informasi_ayah')->where('user_id', $userId)->get()->getResultArray();
        $dataInformasiIbu = $db->table('informasi_ibu')->where('user_id', $userId)->get()->getResultArray();
        $dataDokumen = $db->table('dokumen_peserta')->where('user_id', $userId)->get()->getResultArray();

        $dataUser['informasiPeserta'] = $dataInformasiPeserta[0] ?? null;
        $dataUser['informasiAyah'] = $dataInformasiAyah[0] ?? null;
        $dataUser['informasiIbu'] = $dataInformasiIbu[0] ?? null;
        $dataUser['dokumen'] = $dataDokumen[0] ?? null;

        if ($dataUser['password'] && $dataUser['role']) {
            unset($dataUser['password']);
            unset($dataUser['role']);
        }

        return $dataUser;
    }

    public function getAllUserInformation()
    {
        $db      = \Config\Database::connect();

        $dataUser = $this->select('*')->where("role", "user")->orderBy("created_at", "desc")->findAll();

        $tempData = array();

        foreach ($dataUser as $key => $user) {
            $userId = $user['id'];
            $dataInformasiPeserta = $db->table('informasi_peserta')->where('user_id', $userId)->get()->getResultArray();
            $dataInformasiAyah = $db->table('informasi_ayah')->where('user_id', $userId)->get()->getResultArray();
            $dataInformasiIbu = $db->table('informasi_ibu')->where('user_id', $userId)->get()->getResultArray();
            $dataDokumen = $db->table('dokumen_peserta')->where('user_id', $userId)->get()->getResultArray();
            # code...
            $user['informasiPeserta'] = $dataInformasiPeserta[0] ?? null;
            $user['informasiAyah'] = $dataInformasiAyah[0] ?? null;
            $user['informasiIbu'] = $dataInformasiIbu[0] ?? null;
            $user['dokumen'] = $dataDokumen[0] ?? null;

            if ($user['password'] && $user['role']) {
                unset($user['password']);
                unset($user['role']);
            }

            array_push($tempData, $user);
        }

        return $tempData;
    }

    public function getAllUserInformationSubmitted()
    {
        $db      = \Config\Database::connect();

        $dataUser = $this->select('*')->where("role", "user")->orderBy("created_at", "desc")->findAll();

        $tempData = array();

        foreach ($dataUser as $key => $user) {
            $userId = $user['id'];
            $dataInformasiPeserta = $db->table('informasi_peserta')->where('user_id', $userId)->get()->getResultArray();
            $dataInformasiAyah = $db->table('informasi_ayah')->where('user_id', $userId)->get()->getResultArray();
            $dataInformasiIbu = $db->table('informasi_ibu')->where('user_id', $userId)->get()->getResultArray();
            $dataDokumen = $db->table('dokumen_peserta')->where('user_id', $userId)->get()->getResultArray();

            if (!empty($dataInformasiPeserta) && !empty($dataInformasiAyah) && !empty($dataInformasiIbu) && !empty($dataDokumen)) {
                $user['informasiPeserta'] = $dataInformasiPeserta[0] ?? null;
                $user['informasiAyah'] = $dataInformasiAyah[0] ?? null;
                $user['informasiIbu'] = $dataInformasiIbu[0] ?? null;
                $user['dokumen'] = $dataDokumen[0] ?? null;

                if ($user['password'] && $user['role']) {
                    unset($user['password']);
                    unset($user['role']);
                }

                array_push($tempData, $user);
            }
        }

        return $tempData;
    }

    public function getAllUserInformationNotSubmitted()
    {
        $db      = \Config\Database::connect();

        $dataUser = $this->select('*')->where("role", "user")->orderBy("created_at", "desc")->findAll();

        $tempData = array();

        foreach ($dataUser as $key => $user) {
            $userId = $user['id'];
            $dataInformasiPeserta = $db->table('informasi_peserta')->where('user_id', $userId)->get()->getResultArray();
            $dataInformasiAyah = $db->table('informasi_ayah')->where('user_id', $userId)->get()->getResultArray();
            $dataInformasiIbu = $db->table('informasi_ibu')->where('user_id', $userId)->get()->getResultArray();
            $dataDokumen = $db->table('dokumen_peserta')->where('user_id', $userId)->get()->getResultArray();

            if (empty($dataInformasiPeserta) && empty($dataInformasiAyah) && empty($dataInformasiIbu) && empty($dataDokumen)) {
                $user['informasiPeserta'] = $dataInformasiPeserta[0] ?? null;
                $user['informasiAyah'] = $dataInformasiAyah[0] ?? null;
                $user['informasiIbu'] = $dataInformasiIbu[0] ?? null;
                $user['dokumen'] = $dataDokumen[0] ?? null;

                if ($user['password'] && $user['role']) {
                    unset($user['password']);
                    unset($user['role']);
                }

                array_push($tempData, $user);
            }
        }

        return $tempData;
    }
}
