<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->AuthModel = new AuthModel();
    }
    public function register()
    {
        $data = array(
            'title' => 'Register',
        );
        return view('auth/register', $data);
    }
    // proses register
    public function save_register()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ], 'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ], 'no_telp' => [
                'label' => 'No Telp',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ], 'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ]
        ])) {
            $data = array(
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
                'nama' => $this->request->getPost('nama'),
                'no_telp' => $this->request->getPost('no_telp'),
                'email' => $this->request->getPost('email'),
                'id_user_role' => 2

            );
            $this->AuthModel->save_register($data);
            session()->setFlashdata('pesan', 'Register Berhasil !');
            return redirect()->to(base_url('register'));
        } else {
            // jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('register'));
        }
    }
    public function login()
    {
        $data = array(
            'title' => 'Login',
        );
        return view('auth/login', $data);
    }
    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib di isi dahulu'
                ]
            ]
        ])) {
            // jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->login($username, $password);
            if ($cek) {
                // datanya cocok maka
                session()->set('log', true);
                session()->set('nama', $cek['nama']);
                session()->set('username', $cek['username']);
                session()->set('level', $cek['id_user_role']);
                //login

                return redirect()->to(site_url('home'));
            } else {
                // jika datanya tidak berhasil
                session()->setFlashdata('pesan', 'Login Gagal, Username atau Password tidak salah');
                return redirect()->to(site_url('login'));
            }
        } else {
            // jika tidak valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(site_url('login'));
        }
    }
    public function logout()
    {
        session()->remove('log');
        session()->remove('nama');
        session()->remove('password');
        session()->remove('id_user_role');
        session()->setFlashdata('pesan', 'Logout Sukses');
        return view('auth/login');
    }
}
