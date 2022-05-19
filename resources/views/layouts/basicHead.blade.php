<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
      @yield('tittle')
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />

      <!--CSS-->
      @yield('OwnCSS')
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-utilities.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-grid.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.rtl.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-reboot.rtl.min.css') }}">
      <!-- Bootstrap Icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
      <!-- SimpleLightbox plugin CSS-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

      <!--js-->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.esm.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- SimpleLightbox plugin JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
      <!-- Core theme JS-->
      <script src="{{ asset('js/scripts.js') }}"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
      <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

   </head>
   @yield('content')
</html>
