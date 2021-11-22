<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Register;

class RegisterController extends BaseController
{
    public $register;

    public function __construct()
    {
        $this->register = new Register();
    }

    public function index()
    {
        $data = $this->register->findAll();
        // dd($data);
        return view('register/index', compact('data'));
    }

    public function admin()
    {
        $data = $this->register->findAll();
        // dd($data);
        return view('register/admin', compact('data'));
    }


    public function store()
    {
        $user = 1;
        $file = $this->request->getFile('File');
        // $file->move(FCPATH . 'assets/upload/studio');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('assets/upload/register', $imageName);
        }


        $request = [
            'First_Name' => $this->request->getPost('First_Name'),
            'Last_Name' => $this->request->getPost('Last_Name'),
            'Email' => $this->request->getPost('Email'),
            'Password' => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
            'File' => $imageName, //gambar ganasuk
            'Level' => $user
        ];

        $this->register->insert($request);
        echo '
        <script>
            window.location="' . base_url('register/') . '";
        </script>
        ';
    }
    public function storeAdmin()
    {
        $admin = $this->request->getPost('admin');
        if ($admin == '1234') {
            # code...

            $user = 2;
            $file = $this->request->getFile('File');
            // $file->move(FCPATH . 'assets/upload/studio');
            if ($file->isValid() && !$file->hasMoved()) {
                $imageName = $file->getRandomName();
                $file->move('assets/upload/register', $imageName);
            }


            $request = [
                'First_Name' => $this->request->getPost('First_Name'),
                'Last_Name' => $this->request->getPost('Last_Name'),
                'Email' => $this->request->getPost('Email'),
                // 'Password' => $this->request->getPost('Password'),
                'Password' => password_hash($this->request->getVar('Password'), PASSWORD_BCRYPT),
                'File' => $imageName, //gambar ganasuk
                'Level' => $user
            ];

            $this->register->insert($request);
            echo '
        <script>
            window.location="' . base_url('register/') . '";
        </script>
        ';
        }
    }



    
}
