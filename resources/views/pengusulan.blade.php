@extends('layouts.depan.base')
@section('content')
  <header class="header-2">
    <div class="page-header min-vh-100" style="background-image: url('{{ asset('assets/img/home.jpg') }}')">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Pengusulan</h1>
            <p class="lead text-white mt-3">Berisi Kumpulan Informasi Pengusulan WBTb yang dilaporkan oleh User.</p>
          </div>
        </div>
      </div>
      {{-- <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95" />
          </g>
        </svg>
      </div> --}}
    </div>
  </header>
  <section class="pt-3 pb-4" id="count-stats">
    {{-- <div class="position-relative overflow-hidden" style="height:36px;margin-top:-35px;">
      <div class="w-full absolute bottom-0 start-0 end-0" style="transform: scale(2);transform-origin: top center;color: #fff;">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
        </svg>
      </div>
    </div> --}}
    <div class="container">
      <div class="row bg-white shadow-lg mt-n6 border-radius-md pb-4 p-3 position-relative w-75 mx-auto">
        <div class="col-lg-8 mt-lg-n2 mt-2">
          <label>Cari Pengusulan</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input class="form-control" placeholder="Masukan kata kunci" type="text">
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center mt-lg-auto mt-2">
          <button type="button" class="btn bg-gradient-primary w-100 mb-0">Cari</button>
        </div>
      </div>
    </div>
  </section>
  
  <div class="container mt-2">
    <div class="row">
      <div class="col-lg-12">
        
        @foreach ($pengusulan as $pengusulan)
              
        <div class="row mt-5">
          <div class="col-lg-6 justify-content-center d-flex flex-column">
            <div class="card">
              <div class="d-block blur-shadow-image">
                <img src="{{asset('upload/'.$pengusulan->foto)}}" alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
              </div>
            <div class="colored-shadow" style="background-image: url(&quot; {{asset('upload/'.$pengusulan->foto)}} &quot;);"></div></div>
          </div>
          <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
            <h6 class="category text-warning mt-3">{{$pengusulan->domain}}</h6>
            <h3 class="card-title">
              <a href="{{ url('pengusulan/'.$pengusulan->id) }}" class="text-dark">{{$pengusulan->judul}}</a>
            </h3>
            <p class="card-description">
              
              {!!substr(strip_tags($pengusulan->deskripsi, '<p>'),0,270)!!}... <br/>
              <a href="{{ url('pengusulan/'.$pengusulan->id) }}" class="text-darker icon-move-right text-sm">Read More
                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
              </a>
            </p>
            <p class="author">
              oleh <a href="" class="ms-1"><span class="font-weight-bold text-warning"> {{ucwords($pengusulan->user->name)}}</span></a>, 2 hari yang lalu
            </p>
          </div>
        </div>
        @endforeach
        
        {{-- <div class="row mt-5">
          <div class="col-lg-6 justify-content-center d-flex flex-column">
            <div class="card">
              <div class="d-block blur-shadow-image">
                <img src="https://www.kratonjogja.id/upload/images/peristiwa/img_pASrXFV.jpg" alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
              </div>
            <div class="colored-shadow" style="background-image: url(&quot;https://www.kratonjogja.id/upload/images/peristiwa/img_pASrXFV.jpg&quot;);"></div></div>
          </div>
          <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
            <h6 class="category text-primary mt-3">Upacara-Ritus</h6>
            <h3 class="card-title">
              <a href="{{ url('detail') }}" class="text-dark">Peksi Burak</a>
            </h3>
            <p class="card-description">
              Upacara Adat Peksi Buroq telah ada sejak berdirinya Kraton Ngayogyakarta. Upacara adat peksi burak di lingkungan Kraton Yogyakarta merupakan upacara adat bernuansa religi islam karena berkaitan dengan … <a href="{{ url('detail') }}" class="text-darker icon-move-right text-sm">Read More
                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
              </a>
            </p>
            <p class="author">
              oleh <a href="{{ url('detail') }}" class="ms-1"><span class="font-weight-bold text-primary"> Sarah Aulina</span></a>, 2 hari yang lalu
            </p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-6 justify-content-center d-flex flex-column">
            <div class="card">
              <div class="d-block blur-shadow-image">
                <img src="https://upload.wikimedia.org/wikipedia/id/d/dc/Surjan_1.jpg" alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg">
              </div>
            <div class="colored-shadow" style="background-image: url(&quot;https://upload.wikimedia.org/wikipedia/id/d/dc/Surjan_1.jpg&quot;);"></div></div>
          </div>
          <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
            <h6 class="category text-warning mt-3">Teknologi Tradisional</h6>
            <h3 class="card-title">
              <a href="{{ url('detail') }}" class="text-dark">Sawah Surjan</a>
            </h3>
            <p class="card-description">
              Sawah surjan muncul sebagai respon petani Kulon Progo bagian selatan terhadap kondisi ekologi dan ekonomi. Petani daerah ini menggambarkan tanah mereka sebagai tanah yang banyak mengandung pasir dan lapisannya tipis. Sifat tanah seperti itu menyebabkan pada musim kemarau tanah sering kering. Air yang jatuh ke permukaan tanah baik dari air hujan maupun sumur sawah ...
              <a href="{{ url('detail') }}" class="text-darker icon-move-right text-sm">Read More
                <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
              </a>
            </p>
            <p class="author">
              oleh <a href="{{ url('detail') }}" class="ms-1"><span class="font-weight-bold text-warning"> Sarah Aulina</span></a>, 2 hari yang lalu
            </p>
          </div>
        </div> --}}
        {{-- <div class="row">
          <div class="row mt-5">
            <div class="col-lg-4 mb-lg-0 mb-4">
              <!-- Start Card Blog Fullbackground - text centered -->
              <a href="{{ url('detail') }}">
                <div class="card card-background move-on-hover">
                  <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-ananas.jpg')"></div>
                  <div class="card-body pt-12">
                    <h4 class="text-white">History of Industry</h4>
                    <p>Knowing the history better than anybody else is a huge career advantage, which is wild because even though it’s so simple, few people read up.</p>
                  </div>
                </div>
              </a>
              <!-- End Card Blog Fullbackground - text centered -->
            </div>
            <div class="col-lg-4 mb-lg-0 mb-4">
              <!-- Start Card Blog Fullbackground - text centered -->
              <a href="{{ url('detail') }}">
                <div class="card card-background move-on-hover">
                  <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-banana.jpg')"></div>
                  <div class="card-body pt-12">
                    <h4 class="text-white">Digital Representation</h4>
                    <p>Every protocol has a token, to where every application has a token, to where every valuable representation of an object or person has token.</p>
                  </div>
                </div>
              </a>
              <!-- End Card Blog Fullbackground - text centered -->
            </div>
            <div class="col-lg-4">
              <!-- Start Card Blog Fullbackground - text centered -->
              <a href="{{ url('detail') }}">
                <div class="card card-background move-on-hover">
                  <div class="full-background" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/color-orange.jpg')"></div>
                  <div class="card-body pt-12">
                    <h4 class="text-white">Beginning of an Infinity</h4>
                    <p>Website visitors today demand a frictionless user expericence — especially when using search. Because of the hight standards.</p>
                  </div>
                </div>
              </a>
              <!-- End Card Blog Fullbackground - text centered -->
            </div>
          </div>
        </div> --}}
        <ul class="pagination pagination-primary my-5">
          <li class="page-item">
            <a class="page-link" href="{{ url('detail') }}" aria-label="Previous">
              <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="{{ url('detail') }}">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="{{ url('detail') }}">2</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="{{ url('detail') }}">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="{{ url('detail') }}">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="{{ url('detail') }}">5</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="{{ url('detail') }}" aria-label="Next">
              <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- END Section Content -->
  <!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
  @endsection