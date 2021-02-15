<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'INI JUDUL',
			'angka' => 'sepuluh',
		];

		return view('coba',$data);
	}

	public function user()
	{
		return view('user');
	}
}
