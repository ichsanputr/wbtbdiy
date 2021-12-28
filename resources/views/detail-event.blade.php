@extends('layouts.depan.base')
@section('content')
<header>
    <div class="page-header min-vh-85" style="background-position-y: 50%;">
      <div class="position-absolute border-radius-lg border-top-start-radius-0 border-top-end-radius-0 border-bottom-end-radius-0 fixed-top ms-auto w-75 h-100 z-index-0 d-none d-sm-none d-md-block" style="background-image: url('{{asset('upload/default.jpg')}}'); background-size:cover;">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 d-flex justify-content-center flex-column">
            <div class="card card-body blur d-flex justify-content-center px-5 shadow-lg mt-lg-5 mt-3 py-5">
              <h3 class="mb-4">{{$event->title}}</h3>
              {{-- <p class="lead pe-sm-5 me-sm-5">The time is now for it be okay to be great. People in this world shun people for being nice. </p> --}}
              <strong class="mt-3">Dilaksanakan</strong>
              <div class="d-flex justify-content-start">
                {{$event->start}} s.d {{$event->end}}
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
          <h3 class="title mb-4">{{$event->title}}</h3>
          <span class="text-dark" style="text-align:justify">
            {!! $event->konten !!}
          </span>
        </div>
      </div>
      
    </div>

  </section>
  
  @endsection
