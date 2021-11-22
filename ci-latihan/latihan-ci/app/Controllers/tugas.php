<?php

namespace App\Controllers;

class tugas extends BaseController
{
    public function index()
    {
        // $data[
        //     "title" -> "tugas";
        // ];
        return view('tugas/index.php');
    }
}
