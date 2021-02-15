<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'judul' => 'INI JUDUL',
			'angka' => 'sembilan',
		];

		return view('coba',$data);
	}

	public function user()
	{
		return view('user');
	}
}
