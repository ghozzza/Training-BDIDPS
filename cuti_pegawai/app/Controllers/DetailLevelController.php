<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\DetailLevel;
use App\Controllers\BaseController;

class DetailLevelController extends BaseController
{
    public $detaillevel;

    public function __construct()
    {
        $this->detaillevel = new DetailLevel();
    }
    public function index()
    {
        $db = \config\Database::connect();
        $builder = $db->table('detail_level');
        $builder->select('*, detail_level.id as did, level.nama_level as nl');
        $builder->join('user', 'detail_level.user_id = user.id');
        $builder->join('level', 'detail_level.level_id = level.id');
        $query = $builder->get();
        $data = $query->getResult();
        // dd($data);
        return view('detailLevel/index', compact('data'));
    }
}
