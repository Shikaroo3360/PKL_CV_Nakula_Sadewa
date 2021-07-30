<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->HomeModel = new HomeModel();
	}
	public function index()
	{
		$data = array(
			'tot_user' => $this->HomeModel->tot_user(),
			'tot_layanan' => $this->HomeModel->tot_layanan(),
			'tot_loket' => $this->HomeModel->tot_loket(),
			'tot_cs' => $this->HomeModel->tot_cs()
		);
		return view('home', $data);
	}
}
