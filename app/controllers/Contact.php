<?php

class Contact extends Controller {
    public function index()
    {
        $data['judul'] = 'Contact';
        $this->view('templates/header', $data);
        $this->view('contact/index');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('Contact_model')->tambahDataContact($_POST) > 0 ) {
            Flash::setFlash('berhasil', 'dikirim', 'success');
            header('Location: ' . BASEURL . '/contact');
            exit;
        } else {
            Flash::setFlash('gagal', 'dikirim', 'danger');
            header('Location: ' . BASEURL . '/donation');
            exit;
        }
    }


}