<?php

class Blog extends Controller{
    public function index()
	{
		$data['title'] = 'Halaman Blog';

		$this->view('templates/header', $data);
		$this->view('blog/index', $data);
		$this->view('templates/footer');
	}
}
