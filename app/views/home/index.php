<?php


function from_url($url)
{
  $client = curl_init($url);
  curl_setopt($client, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($client, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  return json_decode($response);
}
$url = "https://api.kawalcorona.com/indonesia/";
$result = from_url($url);
$jmlh_positif = $result[0]->positif;
$jmlh_sembuh = $result[0]->sembuh;
$jmlh_meninggal = $result[0]->meninggal;


?>


<div id="overlayer"></div>
<div class="loader">
  <div class="spinner-border text-primary" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>


<div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>


  <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-xl-2">
          <div class="mb-0 site-logo"><a href="<?= BASEURL; ?>/index" class="mb-0">Covid19.com<span class="text-primary"></span> </a></div>
        </div>

        <div class="col-12 col-md-10 d-none d-xl-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="<?= BASEURL; ?>/index" class="nav-link">Home</a></li>
              <li><a href="<?= BASEURL; ?>/symptoms" class="nav-link">Gejala </a></li>
              <li><a href="<?= BASEURL; ?>/blog" class="nav-link">Blog</a></li>
              <li><a href="<?= BASEURL; ?>/donation" class="nav-link">Donation</a></li>
              <li><a href="<?= BASEURL; ?>/about" class="nav-link">About</a></li>
              <li><a href="<?= BASEURL; ?>/contact" class="nav-link">Contact</a></li>
            </ul>
          </nav>
        </div>


        <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

      </div>
    </div>

  </header>



  <div class="hero-v1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mr-auto text-center text-lg-left">
          <span class="d-block subheading">Informasi Covid-19</span>
          <h1 class="heading mb-3">Stay at Home & Stay Safe</h1>
          <p class="mb-5">Dunia Sedang Berduka dengann Terjadinya Pandemi Besar - Besaran yang Menyerang Hampir Seluru Negara didunia yang efeknya
            Banyak Mengubah Gaya Hidup Serat Juga Berimbas Pada Ekonomi Masyarakat</p>
          <br>
          <br>
          <br>



        </div>
        <div class="col-lg-6">
          <figure class="illustration">
            <br>
            <br>
            <img src="images/illustration.png" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-lg-6"></div>
      </div>
    </div>
  </div>


  <!-- MAIN -->

  <div class="site-section stats">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-7 text-center mx-auto">
          <h2 class="section-heading">Informasi Satistik Kasus Coronavirus</h2>
          <p>Data Informasi Mengenai Kasus Covid-19</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number"><?= $jmlh_positif; ?></strong>
            <span class="label">Kasus Positif</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number"><?= $jmlh_meninggal; ?> </strong>
            <span class="label">Kasus Kematian</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="data">
            <span class="icon text-primary">
              <span class="flaticon-virus"></span>
            </span>
            <strong class="d-block number"><?= $jmlh_sembuh; ?></strong>
            <span class="label">Kasus Kesembuhan</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <figure class="img-play-vid">
            <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
            <div class="absolute-block d-flex">
              <span class="text">Watch the Video</span>
              <a href="https://www.youtube.com/watch?v=0dAoCfgAQw8" data-fancybox class="btn-play">
                <span class="icon-play"></span>
              </a>
            </div>
          </figure>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="mb-2 section-heading">What is Coronavirus?</h2>
          <p>Coronavirus atau disebut juga dengan virus corona merupakan keluarga besar virus
            yang mengakibatkan terjadinya infeksi saluran pernapasan atas ringan hingga sedang, seperti penyakit flu.
            Namun, beberapa jenis virus corona juga bisa menimbulkan penyakit yang lebih serius, seperti:</p>
          <ul class="list-check list-unstyled mb-3">
            <li>Middle East Respiratory Syndrome (MERS-CoV)</li>
            <li>Severe Acute Respiratory Syndrome (SARS-CoV)</li>
            <li>Pneumonia</li>
          </ul>
          <p><a href="https://id.wikipedia.org/wiki/COVID-19" class="btn btn-primary">More Info</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="container pb-5">
    <div class="row">
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-protection"></span>
          </div>
          <div>
            <h3>Perlindungan</h3>
            <span class="d-block">Melindungi Diri</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-patient"></span>
          </div>
          <div>
            <h3>Pencegahan</h3>
            <span class="d-block">Proses Pencegahan</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-hand-sanitizer"></span>
          </div>
          <div>
            <h3>Perawatan</h3>
            <span class="d-block">Proses Perawatan</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="feature-v1 d-flex align-items-center">
          <div class="icon-wrap mr-3">
            <span class="flaticon-virus"></span>
          </div>
          <div>
            <h3>Gejala</h3>
            <span class="d-block">Gejala Terpapar</span>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-primary-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">

          <div class="row">
            <div class="col-6 col-lg-6 mt-lg-5">
              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-stay-at-home"></span>
                </div>
                <div class="body">
                  <h3>Tetap di Rumah</h3>
                  <p>Melakukan semua hal seperti sekolah dan kerja dari rumah dengan tujuan mengrangi kontak fisik</p>
                </div>
              </div>

              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-patient"></span>
                </div>
                <div class="body">
                  <h3>Menggunakan Masker</h3>
                  <p>Menngunkan Masker Untuk Meminimalisir Penyebaran Virus Melalui Udara yang Dihirup</p>
                </div>
              </div>
            </div>
            <div class="col-6 col-lg-6">
              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-social-distancing"></span>
                </div>
                <div class="body">
                  <h3>Menjaga Jarak</h3>
                  <p>Menjaga Jarak Jika Bertemu Seseorang atau Untuk Melakukan Kontak Fisik Minimal 1M</p>
                </div>
              </div>

              <div class="media-v1 bg-1">
                <div class="icon-wrap">
                  <span class="flaticon-hand-washing"></span>
                </div>
                <div class="body">
                  <h3>Mencuci Tangan</h3>
                  <p>Mencuci Tangan dengan Menggunakan Sabun Setelah Melakuakan Semua Aktivitas Sehari - Hari</p>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-5 ml-auto">
          <h2 class="section-heading mb-2">Cara Mencegah Corona Virus</h2>
          <p>Hingga saat ini, belum ada pengobatan yang dapat menyembuhkan infeksi virus Corona.
            Oleh sebab itu, Organisasi Kesehatan Dunia (WHO) mengimbau agar masyarakat tidak memandang sepele penyakit ini dan senantiasa melakukan tindakan pencegahan.
            Salah satunya adalah dengan menerapkan social distancing.</p>
          <p class="mb-4">Beberapa langkah yang bisa dilakukan untuk mencegah infeksi virus Corona, di antaranya:</p>

          <ul class="list-check list-unstyled mb-5">
            <li>Tetap di Rumah</li>
            <li>Menjaga Jarak</li>
            <li>Menggunakan Masker</li>
            <li>Mencuci Tangan</li>
          </ul>

          <br>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Protect Yourself</h2>
          <p>Jangan Terlalu Sering Untuk Keluar Rumah jika Memang Terpaksa Tetap Jaga Protokol Kesehatan.
            Dengan Melindungi diri sendiri Berarti Anda Berusaha Melindungi Orang Terkasih
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 ">
          <div class="row mt-5 pt-5">
            <div class="col-lg-6 do ">
              <h3>Yang Seharusnya dilakukan</h3>
              <ul class="list-unstyled check">
                <li>Tetap di Rumah</li>
                <li>Pakai Masker</li>
                <li>Pakai Sanitizer</li>
                <li>Disinfektan Rumahmu</li>
                <li>Sering Cuci Tangan</li>
                <li>Kurangi Kontak Fisik</li>
              </ul>
            </div>
            <div class="col-lg-6 dont ">
              <h3>yang Harusnya Dihindari</h3>
              <ul class="list-unstyled cross">
                <li>Orang yang Terinfeksi</li>
                <li>Sering Keluar Rumah</li>
                <li>Berjabat Tangan</li>
                <li>Beratatap Muka dengan yang terinfeksi</li>
                <li>Sering Menyentuh Wajah</li>
                <li>Berkumpul di Keramaina</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <img src="images/protect.png" alt="Image" class="img-fluid">
        </div>
      </div>
    </div>
  </div>


  <div class="site-section bg-primary-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Gejala Terinfeksi Covid-19</h2>
          <p>Berikut adalah Gejala Umum yang Biasanya Dialami Oleh Orang yang Terinfeksi Covid-19 : </p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-4">
          <div class="symptom d-flex">
            <div class="img">
              <img src="images/symptom_high-fever.png" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <h3>Demam Tinggi</h3>
              <p> Badan terasa panas dan suhunya tidak wajar</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="symptom d-flex">
            <div class="img">
              <img src="images/symptom_cough.png" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <h3>Batuk</h3>
              <p> Batuk yang terasa sakit,kering dan berlangsung dalam waktu yang cukup lama</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="symptom d-flex">
            <div class="img">
              <img src="images/symptom_sore-troath.png" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <h3>Sakit Tenggorokan</h3>
              <p> Tenggorokan terasa kering dan gatal </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-4">
          <div class="symptom d-flex">
            <div class="img">
              <img src="images/symptom_headache.png" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <h3>Pusing</h3>
              <p> kepala terasa berat dan sakit yang sangat</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-md-center">
        <div class="col-lg-10">
          <div class="note row">

            <div class="col-lg-8 mb-4 mb-lg-0"><strong>Rumah Sakit Rujukan:</strong> Daftar List Rumah Sakit Sebagai Rujukan Pasien yang Positif Covid - 19</div>
            <div class="col-lg-4 text-lg-right">
              <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Show</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>