@extends('layouts.depan.base')
@section('content')
  <section class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <picture>
            <source media="(min-width: 852px)" srcset="{{asset('assets/img/wayang-layanan-budaya.png')}}">
            <img src="" style="width: 90%;">
          </picture>
        </div>
        <div class="col-lg-5 py-10">
          <h3 class="title mb-4">Halaman Tidak Ditemukan</h3>
          <p class="text-dark" style="text-align:justify">
            Mohon Maaf, halaman yang anda tuju tidak tersedia di server. Silakan akses halaman lain. Terimakasih 
          </p>

        </div>
      </div>
      
    </div>

  </section>
  
  @endsection
