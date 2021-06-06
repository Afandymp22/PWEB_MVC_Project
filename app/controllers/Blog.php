<?php

class Blog extends Controller {
    public function index()
    {
        $data['judul'] = 'Blog';
        $this->view('templates/header', $data);
        $this->view('blog/index');
        $this->view('templates/footer');
    }

    public function berita_1()
    {
        $data['judul'] = 'Berita 1';
        $this->view('templates/header', $data);
        $this->view('blog/header_berita');
        $this->view('blog/berita_1');
        $this->view('templates/footer');

    }

    public function berita_2()
    {
        $data['judul'] = 'Berita 2';
        $this->view('templates/header', $data);
        $this->view('blog/header_berita');
        $this->view('blog/berita_2');
        $this->view('templates/footer');

    }

    public function berita_3()
    {
        $data['judul'] = 'Berita 3';
        $this->view('templates/header', $data);
        $this->view('blog/header_berita');
        $this->view('blog/berita_3');
        $this->view('templates/footer');

    }

    public function berita_4()
    {
        $data['judul'] = 'Berita 4';
        $this->view('templates/header', $data);
        $this->view('blog/header_berita');
        $this->view('blog/berita_4');
        $this->view('templates/footer');

    }

    public function berita_5()
    {
        $data['judul'] = 'Berita 5';
        $this->view('templates/header', $data);
        $this->view('blog/header_berita');
        $this->view('blog/berita_5');
        $this->view('templates/footer');

    }

    public function berita_6()
    {
        $data['judul'] = 'Berita 6';
        $this->view('templates/header', $data);
        $this->view('blog/header_berita');
        $this->view('blog/berita_6');
        $this->view('templates/footer');

    }
}