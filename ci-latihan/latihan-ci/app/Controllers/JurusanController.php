<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Jurusan;

class JurusanController extends BaseController
{
    public $jurusan;

    public function __construct()
    {
        $this->jurusan = new Jurusan();
    }

    public function index()
    {
        $data = $this->jurusan->findAll();
        // dd($data);
        return view('jurusan/index', compact('data'));
    }
    public function edit($id)
    {
        $data = $this->jurusan->find($id);
        // dd($data);
        return view('jurusan/edit', compact('data'));
    }


    public function tambah()
    {
        // $data = $this->jurusan->findAll();
        // dd($data);
        // return view('jurusan/tambah', compact('data'));
        return view('jurusan/tambah');
    }

    public function create()
    {
        return view('jurusan/create');
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
    public function updateJurusan($id)
    {
        $this->jurusan->update($id,[
            'nama' => $this->request->getPost('nama'),
        ]);
        
        return redirect('jurusan')->with('success','updated successfully');
    }
    public function deleteJurusan($id)
    {
        $this->jurusan->delete($id);

        session()->set_flashdata('success', 'Data jurusan berhasil dihapus.');
        
        return redirect('jurusan')->with('success','delete successfully');
    }

    // public function create()
    // {
    //     $this->jurusan->insert([
    //         'nama' => $this->request->getPost('nama'),
    //     ]);

    //     return redirect('jurusan')->with('success', 'Data Added Successfully');
    // }
}
