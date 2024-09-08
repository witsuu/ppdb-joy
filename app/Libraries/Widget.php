<?php

namespace App\Libraries;

class Widget
{

    public function modalDelete(array $params)
    {
        return view('widget/modalDelete', $params);
    }
    public function modalEditUser(array $params)
    {
        return view('widget/modalEditUser', $params);
    }
    public function modalViewUser(array $params)
    {
        return view('widget/modalViewUser', $params);
    }
    public function modalEditPendaftar(array $params)
    {
        return view('widget/modalEditPendaftar', $params);
    }
    public function modalVerify(array $params)
    {
        return view('widget/modalVerifikasi', $params);
    }
    public function modalAddPendaftar(array $params)
    {
        return view('widget/modalAddPendaftar', $params);
    }
    public function modalEditPpdb(array $params)
    {
        return view('widget/modalEditPpdb', $params);
    }
    public function modalAddPengumuman()
    {
        return view('widget/modalAddPengumuman');
    }
    public function modalEditPengumuman(array $params)
    {
        return view('widget/modalEditPengumuman', $params);
    }
    public function modalDeletePengumuman(array $params)
    {
        return view('widget/modalDeletePengumuman', $params);
    }
}
