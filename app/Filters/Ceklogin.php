<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Ceklogin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('log')) {
            return redirect()->to('auth/login');
        }
        if (session('log')) {
            return redirect()->to('home/index');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
