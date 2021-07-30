<?php

namespace App\Controllers;

class Log extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('log');
        $query = $builder->get()->getResult();
        $data['log'] = $query;
        return view('log/get', $data);
    }
}
