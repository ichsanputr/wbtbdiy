<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Metas -->
    @if(env('IS_DEMO'))
        <meta  name="keywords" content="creative tim, updivision, html dashboard, laravel, livewire, laravel livewire, alpine.js, html css dashboard laravel, soft ui dashboard laravel, livewire soft ui dashboard, soft ui admin, livewire dashboard, livewire admin, web dashboard, bootstrap 4 dashboard laravel, bootstrap 4, css3 dashboard, bootstrap 4 admin laravel, soft ui dashboard bootstrap 4 laravel, frontend, responsive bootstrap 4 dashboard, soft ui dashboard, soft ui laravel bootstrap 4 dashboard" />
        <meta  name="description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
        <meta  itemprop="name" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
        <meta  itemprop="description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
        <meta  itemprop="image" content="https://s3.amazonaws.com/creativetim_bucket/products/492/original/opt_sd_laravel_thumbnail.jpg" />
        <meta  name="twitter:card" content="product" />
        <meta  name="twitter:site" content="@creativetim" />
        <meta  name="twitter:title" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
        <meta  name="twitter:description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
        <meta  name="twitter:creator" content="@creativetim" />
        <meta  name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/492/original/opt_sd_laravel_thumbnail.jpg" />
        <meta  property="fb:app_id" content="655968634437471" />
        <meta  property="og:title" content="Soft UI Dashboard Laravel by Creative Tim & UPDIVISION" />
        <meta  property="og:type" content="article" />
        <meta  property="og:url" content="https://www.creative-tim.com/live/vue-argon-dashboard-laravel" />
        <meta  property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/492/original/opt_sd_laravel_thumbnail.jpg" />
        <meta  property="og:description" content="Dozens of handcrafted UI components, Laravel authentication, register & profile editing, Livewire & Alpine.js" />
        <meta  property="og:site_name" content="Creative Tim" />
        
    @endif
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/logo.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">
    <title>
        Warisan Budaya Tak Benda Daerah Istimewa Yogyakarta
    </title>
    <!-- Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{asset('/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet" />
    <!-- Alpine -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @stack('style')
    @livewireStyles
    
</head>

<body class="g-sidenav-show bg-gray-100">

    {{ $slot }}
    @stack('modal');

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/assets/js/soft-ui-dashboard.min.js?v=1.0.2') }}"></script>
    @stack('js')
    @livewireScripts
</body>

</html>
