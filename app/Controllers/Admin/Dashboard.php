<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;

class Dashboard extends \App\Controllers\BaseController
{
    public function index()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $userModel = new UserModel();

        $userSubmitted = $userModel->getAllUserInformationSubmitted();
        $userVerified = $userModel->getAllUserInformationVerified();
        $userNotVerified = $userModel->getAllUserInformationNotVerified();

        return view('admin/dashboard', [
            'title' => 'Admin Dashboard',
            'userSubmitted' => $userSubmitted,
            'userVerified' => $userVerified,
            'userNotVerified' => $userNotVerified
        ]);
    }
}
