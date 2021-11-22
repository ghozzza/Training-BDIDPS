<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi;
use App\Models\Studio;

class TransaksiController extends BaseController
{
    public $transaksi;
    public $studio;

    public function __construct()
    {
        $this->transaksi = new Transaksi();
        $this->studio = new studio();
    }

    public function index($id)
    {
        $data = $this->transaksi->find($id);
        $data2 = $this->studio->find($id);
        //dd($data2);
        return view('transaksi/index', compact('data', 'data2'));
    }
    public function store()
    {
        
        $request = [
            'id_studio' => $this->request->getPost('id_studio'),
            'id_user' => $this->request->getPost('id_user'),
            'catatan' => $this->request->getPost('catatan'),
            'jam' => $this->request->getPost('jam'),
            'durasi' => $this->request->getPost('durasi'),
            'tanggal' => $this->request->getPost('tanggal')
        ];

        $this->transaksi->insert($request);
        echo '
        <script>
            window.location="' . base_url('studio/') . '";
        </script>
        ';
    }
    
    public function list()
    {
        $data = $this->transaksi->findAll();
        $data2 = $this->studio->findAll();
        //dd($data2);
        return view('transaksi/list', compact('data', 'data2'));
    }
}
