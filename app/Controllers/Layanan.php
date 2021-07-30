<?php

namespace App\Controllers;

use CodeIgniter\Database\SQLite3\Table;

class Layanan extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('layanan');
        $query = $builder->get()->getResult();
        $data['layanan'] = $query;
        return view('layanan/get', $data);
    }
    public function create()
    {
        return view('layanan/add');
    }
    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('layanan')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('layanan'))->with('success', 'Data Berhasil Disimpan');
        }
    }
    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('layanan')->getWhere(['id_layanan' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['layanan'] = $query->getRow();
                return view('layanan/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }
    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);
        $this->db->table('layanan')->where(['id_layanan' => $id])->update($data);
        return redirect()->to(site_url('layanan'))->with('success', 'Data Berhasil Update');
    }
    public function destroy($id)
    {
        $this->db->table('layanan')->where(['id_layanan' => $id])->delete();
        return redirect()->to(site_url('layanan'))->with('success', 'Data Berhasil Dihapus');
    }
}
