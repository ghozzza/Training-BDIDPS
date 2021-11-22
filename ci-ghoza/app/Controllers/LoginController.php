<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Register;

class LoginController extends BaseController
{
    public $register;

    public function __construct()
    {
        $this->register = new Register();
    }

    public function index()
    {
        return view('login/index');
    }

    public function proses()
    {

        $Email = $this->request->getPost('Email');
        $Password = $this->request->getPost('Password');

        $query = $this->register->where("Email = '$Email'")->first();

        if ($query && password_verify($Password, $query['Password'])) {
            session()->set([
                'ID' => $query['ID'],
                'First_Name' => $query['First_Name'],
                'Last_Name' => $query['Last_Name'],
                'Email' => $query['Email'],
                'File' => $query['File'],
                'Level' => $query['Level'],
                'logged_in' => TRUE
            ]);

            if (session()->Level == '1') {
                return redirect()->to(base_url('studio'));
            } else {
                return redirect('/');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('studio'));
    }
}
