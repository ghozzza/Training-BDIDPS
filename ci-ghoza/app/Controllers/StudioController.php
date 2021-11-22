<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Studio;
use App\Models\Register;

class StudioController extends BaseController
{
    public $studio;
    public $Register;

    public function __construct()
    {
        $this->studio = new studio();
        $this->Register = new Register();
    }

    public function index()
    {
        $data = $this->studio->findAll();
        $data2 = $this->Register->findAll();
        // dd($data2);
        return view('studio/index', compact('data','data2'));
    }

    public function tambah()
    {
        // $data = $this->studio->findAll();
        // dd($data);
        return view('studio/tambah');
    }

    public function store()
    {
        $file = $this->request->getFile('gambar');
        // $file->move(FCPATH . 'assets/upload/studio');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('assets/upload/studio', $imageName);
        }


        $request = [
            'nama_studio' => $this->request->getPost('nama_studio'),
            'gambar' => $imageName, //gambar ganasuk
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga')
        ];

        $this->studio->insert($request);
        echo '
        <script>
            window.location="' . base_url('studio/') . '";
        </script>
        ';
    }
    public function deleteStudio($id)
    {
        $this->studio->delete($id);

        // session()->set_flashdata('success', 'delete successfully'); //kynya buat javascript

        // return redirect('studio')->with('success','delete successfully');
        echo '
        <script>
            window.location="' . base_url('studio/') . '";
        </script>
        ';
    }
    public function edit($id)
    {
        $data = $this->studio->find($id);
        // dd($data);
        return view('studio/edit', compact('data'));
    }
    public function updateStudio($id)
    {
        $file = $this->request->getFile('gambar');
        // $file->move(FCPATH . 'assets/upload/studio');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('assets/upload/studio', $imageName);
        }
        $this->studio->update($id, [
            'nama_studio' => $this->request->getPost('nama_studio'),
            'gambar' => $imageName, //gambar ganasuk
            'deskripsi' => $this->request->getPost('deskripsi'),
            'harga' => $this->request->getPost('harga')
        ]);

        echo '
        <script>
            window.location="' . base_url('studio/') . '";
        </script>
        ';
    }
}
