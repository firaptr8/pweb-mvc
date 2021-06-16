<?php

class Contact extends Controller{
    public function index()
    {
      $data['title'] = 'Halaman Contact';

      $this->view('templates/header', $data);
      $this->view('contact/index', $data);
      $this->view('templates/footer');
    }
}
