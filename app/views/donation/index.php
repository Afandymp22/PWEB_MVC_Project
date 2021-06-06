  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>



  <div class="site-wrap">

    <div class="row">
      <div class="col-lg-6">
        <?php Flash::flash(); ?>
      </div>
    </div>

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
                <li><a href="<?= BASEURL; ?>/index" class="nav-link">Home</a></li>
                <li><a href="<?= BASEURL; ?>/symptoms" class="nav-link">Gejala</a></li>
                <li><a href="<?= BASEURL; ?>/blog" class="nav-link">Blog</a></li>
                <li class="active"><a href="<?= BASEURL; ?>/donation" class="nav-link">Donation</a></li>
                <li><a href="<?= BASEURL; ?>/about" class="nav-link">About</a></li>
                <li><a href="<?= BASEURL; ?>/contact" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="clearfix"></div>



          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>
    </header>






    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mr-auto text-center text-lg-left">
            <span class="d-block subheading">Donasi Covid - 19</span>
            <h1 class="heading mb-3">Be Care & Help Other</h1>
            <p class="mb-5">Membantu dan Meringankan Penderitaan Sesama Dengan Cara Membantunya dengan Memberikan Donasi</p>
            <br>
            <br>
          </div>

          <div class="col-lg-6">
            <figure class="illustration-2">
              <br>
              <br>
              <img src="images/protect.png" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </div>
    </div>


    <!-- MAIN -->




    <div class="site-section bg-primary-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/donation/tambah" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="bank">Rekening Bank</label>
                    <select class="form-control" id="bank" name="bank">
                      <option>Bank BRI</option>
                      <option>Bank BCA</option>
                      <option>Bank Mandiri</option>
                      <option>Bank Jatim</option>
                      <option>Bank BNI</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="donasi">Nominal Donasi</label>
                    <input type="number" id="donase" name="donasi" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <button type="submit" class="btn btn-primary">Donasi</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section stats">
      <div class="container">
        <div class="row mb-3">
          <div class="col-lg-7 text-center mx-auto">
            <h3 class="section-heading">Total Donasi</h3>
            <p>Total Donasi yang Sudah terkumpul adalah: </p>
            <?php foreach ($data['donasi'] as $donasi) : ?>
              <h1 class="display-1">Rp. <?= number_format($donasi['total'], 0, ',', '.') ?> ,-</h1>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section bg-primary-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4 section-heading">Thanks For Your Donation</h2>
          <p>Terima Ksih untuk Donasi yang Telah Anda Berikan. Berapapun Donasi Yang Anda Berikan Hal itu sangat Berharga dan Sangat bermanfaat untuk Orang diluar Sana </p>
        </div>
      </div>
    </div>
  </div>