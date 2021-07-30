<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    public function tot_user()
    {
        return $this->db->table('user')->countAll();
    }
    public function tot_layanan()
    {
        return $this->db->table('layanan')->countAll();
    }
    public function tot_loket()
    {
        return $this->db->table('loket')->countAll();
    }
    public function tot_cs()
    {
        return $this->db->table('cs')->countAll();
    }
}
