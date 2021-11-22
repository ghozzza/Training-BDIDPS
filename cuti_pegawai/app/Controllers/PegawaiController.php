<?php

namespace App\Controllers;
use App\Models\Pegawai;
use App\Controllers\BaseController;

class PegawaiController extends BaseController
{
    public $pegawai;

    public function __construct()
    {
        $this->pegawai = new Pegawai();
    }
    public function index()
    {
        // $data = $this->pegawai->findAll();
        // dd($data);
        return view('pegawai/index');
    }
    public function store()
    {
        $request = [
            'nama' => $this->request->getPost('nama')
        ];
        $this->jurusan->insert($request);
        echo '
        <script>
            window.location="' . base_url('jurusan') . '";
        </script>
        ';
    }
}
