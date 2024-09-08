<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;
use Dompdf\Dompdf;
use Dompdf\Options;

class Laporan extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getAllUserInformationVerified();

        // dd($users);

        return view("admin/laporan", [
            'title' => "Laporan Pendaftar",
            'users' =>  $users,
        ]);
    }

    public function generatePdf($id)
    {
        $userModel = new UserModel();
        $userPpdb = $userModel->getUserInformation($id);

        if (empty($userPpdb)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Konfigurasi Dompdf
        $options = new Options();

        // Inisialisasi Dompdf
        $dompdf = new Dompdf($options);

        // Muat konten HTML untuk dimasukkan ke dalam PDF
        $html = view('exportLaporan', [
            'userPpdb' => $userPpdb
        ]); // Menggunakan view 'pdf_template.php' sebagai isi PDF

        // Load HTML ke Dompdf
        $dompdf->loadHtml($html);

        // Mengatur ukuran dan orientasi kertas (default: A4, potrait)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF dari HTML
        $dompdf->render();

        $filename = $userPpdb['informasiPeserta']['nik'] . "_" . $userPpdb['informasiPeserta']['nama_panggilan'] . ".pdf";

        // Output PDF ke browser untuk diunduh
        $dompdf->stream($filename, array("Attachment" => false)); // Ubah ke true untuk otomatis mengunduh
    }
}
