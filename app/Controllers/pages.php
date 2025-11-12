<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda - UMKMku',
            'page'  => 'beranda'
        ];

        echo view('layout/header', $data);
        echo view('pages/index', $data);
        echo view('layout/footer');
    }

    public function event()
    {
        return view('pages/event');
    }
}
