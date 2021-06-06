<?php

class Symptoms extends Controller {
    public function index()
    {
        $data['judul'] = 'Symptoms';
        $this->view('templates/header', $data);
        $this->view('symptoms/index');
        $this->view('templates/footer');
    }

}