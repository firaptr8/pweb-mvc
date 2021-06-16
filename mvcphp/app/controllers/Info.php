<?php

class Info extends Controller{
    public function index()
	{
		$data['title'] = 'Halaman Info';

		$this->view('templates/header', $data);
		$this->view('info/index', $data);
		$this->view('templates/footer');
	}
}
