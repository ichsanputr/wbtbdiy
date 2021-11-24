<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/soft-ui/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
  <title>
    Warisan Budaya tak Benda - Daerah Istimewa Yogyakarta
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/soft-ui/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/soft-ui/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/soft-ui/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/soft-ui/css/soft-design-system.css?v=1.0.5') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/fullcalendar/lib/main.min.css') }}" rel="stylesheet"/>
</head>

<body class="index-page">
  <!-- Navbar -->
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg  blur blur-rounded top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
          <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-sm-3" href="{{ url('/') }}" rel="tooltip" title="Designed and Coded oleh Creative Tim" data-placement="bottom" target="_blank">
              <img src="{{ asset('assets/img/logo.png') }}" alt="" width="54" height="34"/>
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
              <ul class="navbar-nav navbar-nav-hover ms-lg-8 ps-lg-5 w-100">
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuPages" href="{{ url('pencatatan') }}" aria-expanded="false">
                    Pencatatan
                  </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuBlocks" href="{{ url('pengusulan') }}" aria-expanded="false">
                    Pengusulan
                  </a>
                  
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" href="{{ url('') }}" aria-expanded="false">
                    Berita
                  </a>
                  
                </li>
                <li class="nav-item dropdown dropdown-hover mx-2">
                  <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center" id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                    Dokumen
                    <img src="{{ asset('assets/soft-ui/img/down-arrow-dark.svg') }}" alt="down-arrow" class="arrow ms-1">
                  </a>
                  <ul class="dropdown-menu dropdown-menu-animation dropdown-lg mt-0 mt-lg-3 p-3 border-radius-lg" aria-labelledoleh="dropdownMenuDocs">
                    <div class="d-none d-lg-block">
                      <ul class="list-group">
                        <li class="nav-item list-group-item border-0 p-0">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                            <div class="d-flex">
                              <div class="icon h-10 me-3 d-flex mt-1">
                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <title>spaceship</title>
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                      <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(4.000000, 301.000000)">
                                          <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                          </path>
                                          <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                          </path>
                                          <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                          <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </div>
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Pengertian & Domain</h6>
                                <span class="text-sm">Penjelasan definisi & domain Warisan Budaya Tak Benda</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li class="nav-item list-group-item border-0 p-0">
                          <a class="dropdown-item py-2 ps-3 border-radius-md" href="  ">
                            <div class="d-flex">
                              <div class="icon h-10 me-3 d-flex mt-1">
                                <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                  <title>document</title>
                                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                      <g transform="translate(1716.000000, 291.000000)">
                                        <g transform="translate(154.000000, 300.000000)">
                                          <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                          <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                          </path>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                </svg>
                              </div>
                              <div>
                                <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Produk Hukum</h6>
                                <span class="text-sm">Kumpulan Produk Hukum yang mengatur Warisan Budaya</span>
                              </div>
                            </div>
                          </a>
                        </li>
                        
                      </ul>
                    </div>
                    <div class="row d-lg-none">
                      <div class="col-md-12 g-0">
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>spaceship</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                      <g transform="translate(4.000000, 301.000000)">
                                        <path class="color-background" d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                                        </path>
                                        <path class="color-background" d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                                        </path>
                                        <path class="color-background" d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z" opacity="0.598539807"></path>
                                        <path class="color-background" d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z" opacity="0.598539807"></path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </div>
                            <div>
                              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Pengertian & Domain</h6>
                              <span class="text-sm">Penjelasan definisi & domain Warisan Budaya Tak Benda</span>
                            </div>
                          </div>
                        </a>
                        <a class="dropdown-item py-2 ps-3 border-radius-md" href="  ">
                          <div class="d-flex">
                            <div class="icon h-10 me-3 d-flex mt-1">
                              <svg class="text-secondary" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>document</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                    <g transform="translate(1716.000000, 291.000000)">
                                      <g transform="translate(154.000000, 300.000000)">
                                        <path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                                        <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                        </path>
                                      </g>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                            </div>
                            <div>
                              <h6 class="dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0">Produk Hukum</h6>
                              <span class="text-sm">Kumpulan Produk Hukum yang mengatur Warisan Budaya</span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </ul>
                </li>
                <li class="nav-item ms-lg-auto">
                  <a class="nav-link nav-link-icon me-2" href="https://github.com/creativetimofficial{{ asset('assets') }}/soft-ui-design-system" target="_blank">
                    <p class="d-inline text-sm z-index-1 font-weight-bold">JogjaTradition</p>
                  </a>
                </li>
                <li class="nav-item my-auto ms-3 ms-lg-0">
                  <a href="{{ url('/login') }}" class="btn btn-sm  bg-gradient-primary  btn-round mb-0 me-1 mt-2 mt-md-0">Login</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>

  <header>
    <div class="page-header min-vh-85" style="background-position-y: 50%;">
      <div class="position-absolute border-radius-lg border-top-start-radius-0 border-top-end-radius-0 border-bottom-end-radius-0 fixed-top ms-auto w-75 h-100 z-index-0 d-none d-sm-none d-md-block" style="background-image: url('https://www.kratonjogja.id/upload/images/assets/srimpi-muncar-09-08-2020-001.jpg'); background-size:cover;">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card card-body blur d-flex justify-content-center px-5 shadow-lg mt-lg-5 mt-3 py-5">
              <strong class="text-gradient text-primary mb-0">Seni Pertunjukan</strong>
              <h3 class="mb-4">Tarian Srimpi Muncar</h3>
              {{-- <p class="lead pe-sm-5 me-sm-5">The time is now for it be okay to be great. People in this world shun people for being nice. </p> --}}
              <strong class="mt-3">Bagikan di Sosial Media</strong>
              <div class="d-flex justify-content-start">
                <a href="javascript:;"><i class="fab fa-facebook text-dark me-4 text-lg" aria-hidden="true"></i></a>
                <a href="javascript:;"><i class="fab fa-twitter text-dark me-4 text-lg" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 ms-auto me-auto">
          <h6 class="opacity-7 text-uppercase font-weight-bolder text-sm">Detail</h6>
          <h3 class="title mb-4">Tarian Srimpi Muncar</h3>
          <p class="text-dark" style="text-align:justify">
            Srimpi Muncar merupakan tari klasik Keraton Yogyakarta Yasan Dalem (karya) Sri Sultan Hamengku Buwono VI (1855-1877), diciptakan pada 1857, dan disempurnakan pada era Sri Sultan Hamengku Buwono VIII (1921-1939). ‘Muncar’ berarti gemilang atau bersinar. Dibawakan oleh empat penari putri, beksan ini mengambil cuplikan cerita dari Kagungan Dalem Serat Menak. <br/><br/>Dikisahkan Dewi Adaninggar, putri Cina dari negeri Tartaripura berperang melawan Dewi Kelaswara dari negeri Kelan untuk memperjuangkan cinta Wong Agung Jayengrana. Kedua putri yang sepadan itu saling adu ketangkasan dan kekuatan hingga akhirnya Dewi Kelaswara memenangkan pertarungan. Karena adanya tokoh putri Cina ini, Srimpi Muncar juga dikenal sebagai Srimpi Cina. <br/><br/>Dalam pementasan, kedua tokoh tersebut dibedakan terkait ragam gerak, tata busana, dan tata riasnya. Keduanya membawa senjata; keris untuk Dewi Kelaswara dan cundrik untuk Dewi Adaninggar. Dua senjata ini digunakan dalam adegan peperangan.
          </p>
        </div>
      </div>
      <section class="py-7 position-relative">
        <div id="carousel-testimonials" class="carousel slide carousel-team">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-5 me-lg-auto position-relative">
                    <h6 class="opacity-7 text-uppercase font-weight-bolder text-sm fadeIn4 fadeInBottom">Galeri</h6>
                    <strong class="text-dark font-weight-bolder fadeIn2 fadeInBottom">Foto Warisan Budaya</strong>
                    
                  </div>
                  <div class="col-md-5 ms-lg-auto">
                    <div class="p-3">
                      <img class="w-100 border-radius-md max-height-600 fadeIn2 fadeInBottom" src="https://www.kratonjogja.id/upload/images/assets/srimpi-muncar-09-08-2020-001.jpg" alt="First slide">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-5 me-lg-auto position-relative">
                    <h6 class="opacity-7 text-uppercase font-weight-bolder text-sm fadeIn4 fadeInBottom">Galeri</h6>
                    <strong class="text-dark font-weight-bolder fadeIn2 fadeInBottom">Video Warisan Budaya</strong>
                  </div>
                  <div class="col-md-5 ms-lg-auto">
                    <div class="p-3">
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/ql0I3hdKR8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="position-relative mt-n6">
            <a class="carousel-control-prev text-dark position-absolute bottom-0 start-0" href="#carousel-testimonials" role="button" data-bs-slide="prev">
              <i class="fas fa-2x fa-chevron-left position-absolute start-0 ms-3" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-dark position-absolute bottom-0 start-0 ms-4" href="#carousel-testimonials" role="button" data-bs-slide="next">
              <i class="fas fa-2x fa-chevron-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </section>
    </div>

  </section>
  
  <!-- END Section Content -->
  <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  <div class="pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ms-auto">
          <h4 class="mb-1">Kontak Kami</h4>
          <p class="mb-0">Ikuti akun resmi media sosial Dinas Kebudayaan DIY</p>
        </div>
        <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-right mt-5">
          <a href="https://twitter.com/" class="btn btn-info mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1"></i> Twitter
          </a>
          <a href="https://www.facebook.com/" class="btn btn-primary mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1"></i> Facebook
          </a>
          <a href="https://www.instagram" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-instagram me-1"></i> Instagram
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  <footer class="footer pt-5 mt-5">
    <hr class="horizontal dark mb-5">
    <div class="container">
      <div class=" row">
        <div class="col-12">
          <div class="text-center">
            <p class="my-4 text-sm">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> WBTb DIY <a href="https://budaya.jogjaprov.go.id/" target="_blank">Dinas Kebudayaan Daerah Istimewa Yogyakarta</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="{{ asset('assets/soft-ui/js/core/popper.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/soft-ui/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/soft-ui/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
  <script src="{{ asset('assets/soft-ui/js/plugins/countup.min.js') }}"></script>
  <script src="{{ asset('assets/soft-ui/js/plugins/choices.min.js') }}"></script>
  <script src="{{ asset('assets/soft-ui/js/plugins/prism.min.js') }}"></script>
  <script src="{{ asset('assets/soft-ui/js/plugins/highlight.min.js') }}"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
  <script src="{{ asset('assets/soft-ui/js/plugins/rellax.min.js') }}"></script>
  <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
  <script src="{{ asset('assets/soft-ui/js/plugins/tilt.min.js') }}"></script>
  <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
  <script src="{{ asset('assets/soft-ui/js/plugins/choices.min.js') }}"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="{{ asset('assets/soft-ui/js/plugins/parallax.min.js') }}"></script>
  <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="{{ asset('assets/soft-ui/js/soft-design-system.min.js?v=1.0.5') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/plugins/fullcalendar/lib/main.min.js') }}"></script>
  <script type="text/javascript">
    if (document.getElementById('state1')) {
      const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
      if (!countUp.error) {
        countUp.start();
      } else {
        console.error(countUp.error);
      }
    }
    if (document.getElementById('state2')) {
      const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
      if (!countUp1.error) {
        countUp1.start();
      } else {
        console.error(countUp1.error);
      }
    }
    if (document.getElementById('state3')) {
      const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
      if (!countUp2.error) {
        countUp2.start();
      } else {
        console.error(countUp2.error);
      };
    }


    

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      timeZone: 'UTC',
      initialView: 'dayGridMonth',
      events: 'https://fullcalendar.io/demo-events.json',
      editable: true,
      selectable: true
    });

    calendar.render();
  });

  </script>
</body>

</html>
