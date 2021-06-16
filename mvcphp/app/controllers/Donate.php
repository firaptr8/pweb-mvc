<?php

class Donate extends Controller{
    public function index()
    {
      $data['title'] = 'Form Donasi';

      $this->view('donate/index', $data);
    }
}
