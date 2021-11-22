<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Karyawan;

class KaryawanController extends BaseController
{

    public $karyawan;

    public function __construct()
    {
        $this->karyawan = new Karyawan();
    }

    public function index()
    {
        $data = $this->karyawan->findAll();
        // dd($data);
        return view('karyawan/index.php', compact('data'));
    }
    public function tambah()
    {
        // $data = $this->jurusan->findAll();
        // dd($data);
        // return view('jurusan/tambah', compact('data'));
        if (!$this->validate([
            'nama' => 'required',
            'alamat' => 'required|min_length[1]',
            'posisi' => 'required|',
            'gaji'    => 'required|',
        ]))
            helper(['form', 'url']);

        if (!$this->validate([])) {
            echo view('karyawan/tambah', [
                'validation' => $this->validator,
            ]);
        } else {
            echo view('Success');
        }
        // return view('karyawan/tambah');
    }
    public function store()
    {
        $request = [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'posisi' => $this->request->getPost('posisi'),
            'gaji' => $this->request->getPost('gaji')

        ];
        $this->karyawan->insert($request);
        echo '
        <script>
            window.location="' . base_url('karyawan') . '";
        </script>
        ';
    }
    public function edit($id)
    {
        $data = $this->karyawan->find($id);
        // dd($data);
        return view('karyawan/edit', compact('data'));
    }
    public function updateKaryawan($id)
    {
        $this->karyawan->update($id, [
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'posisi' => $this->request->getPost('posisi'),
            'gaji' => $this->request->getPost('gaji')
        ]);

        return redirect('karyawan')->with('success', 'updated successfully');
    }
    public function deleteKaryawan($id)
    {
        $this->karyawan->delete($id);

        // session()->set_flashdata('success', 'Data karyawan berhasil dihapus.');

        return redirect('karyawan')->with('success', 'delete successfully');
    }
}
