<div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="row">
      <div class="col-lg-6">
        <?php Flash::flash2(); ?>
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
            <div class="mb-0 site-logo"><a href="<?= BASEURL;?>/index" class="mb-0">Covid19.com<span class="text-primary"></span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= BASEURL;?>/index" class="nav-link">Home</a></li>
                <li><a href="<?= BASEURL;?>/symptoms" class="nav-link">Gejala</a></li>
                <li><a href="<?= BASEURL;?>/blog" class="nav-link">Blog</a></li>
                <li><a href="<?= BASEURL;?>/donation" class="nav-link">Donation</a></li>
                <li><a href="<?= BASEURL;?>/about" class="nav-link">About</a></li>
                <li class="active"><a href="<?= BASEURL;?>/contact" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>




    <div class="hero-v1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 text-center mx-auto">
            <span class="d-block subheading">Contact Us</span>
            <h1 class="heading mb-3">By Filling This Following Form</h1>
            <p class="mb-5">"You can send us a message by filling this form"</p>
          </div>
          
        </div>
      </div>
    </div>


    <!-- MAIN -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/contact/tambah" method="post">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="fname">Nama Awal</label>
                    <input type="text" id="fname" name="fname" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label for="lname">Nama Akhir</label>
                    <input type="text" id="lname" name="lname" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="emailp">Email</label>
                    <input type="email" id="emailp" name="emailp" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label for="tentang">Tentang</label>
                    <input type="text" id="tentang" name="tentang" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                  <label for="pesan">Pesan</label>
                    <input type="text" id="pesan" name="pesan" class="form-control">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-lg-6">
                <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-5 ml-auto">
            <h3 class="mb-3 side-title">Quick info</h3>
            <div class="quick-contact">

              <div class="d-flex">
                <span class="icon-room"></span>
                <address>
                Jl. Sumatra Gg. Kenanga No.43, Tegal Boto Lor, Sumbersari, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68121
                </address>
              </div>
              <div class="d-flex">
                <span class="icon-phone"></span>
                <a href="<?= BASEURL;?>/contact">+62 85123456789</a>
              </div>
              <div class="d-flex">
                <span class="icon-envelope"></span>
                <a href="<?= BASEURL;?>/contact">covid19@Gmail.com</a>
              </div>
              <div class="d-flex">
                <span class="icon-globe"></span>
                <a href="<?= BASEURL;?>/index">https://covid19.com</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

