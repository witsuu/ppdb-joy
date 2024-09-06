<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\ResponseInterface;

class Image extends BaseController
{
    public function foto($fileName)
    {
        // Lokasi file di writable/uploads
        $filePath = WRITEPATH . 'uploads/documents/' . $fileName;

        // Cek apakah file ada
        if (file_exists($filePath)) {
            // Menampilkan gambar
            $file = new File($filePath);
            return $this->response->setHeader('Content-Type', $file->getMimeType())
                ->setBody(file_get_contents($filePath));
        }

        // Jika file tidak ditemukan, tampilkan error 404
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}
