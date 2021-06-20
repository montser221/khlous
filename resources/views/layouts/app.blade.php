<!doctype html>
<html lang="ar">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content=""/>
    <meta name="keywords" content=" "/>
     <meta property="og:site_name" content=""/>
     <meta property="og:title" content=" " />
      <meta property="og:description" content="">
     <meta property="og:type" content="website"/>
     <meta property="og:image" content="uploads/logo.png"/>
    <meta property="og:url" content="/"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{url('css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" >
  <link rel="stylesheet" href="{{ url('css/style.css') }}" >
    @stack('css')

    <title>@yield('title','title')</title>
  </head>

  <body>

    <div  >

        @yield('header')

    </div>



    <div >



        @yield('content')



    </div>



    <div>

       @yield('footer')

    </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, thenPopper.js, then Bootstrap JS -->
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/popper.min.js')}}"></script>
    <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('js/main.js')}}"></script>
    @stack('scripts')
</body>

</html>

