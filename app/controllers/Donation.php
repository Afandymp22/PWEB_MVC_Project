<?php

class Donation extends Controller {
    public function index()
    {
        $data['judul'] = 'Donation';
        $data['donasi'] = $this->model('Donation_model')->getAllDonation();
        $this->view('templates/header', $data);
        $this->view('donation/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ( $this->model('Donation_model')->tambahDataDonasi($_POST) > 0 ) {
            Flash::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/donation');
            exit;
        } else {
            Flash::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/donation');
            exit;
        }
    }







}