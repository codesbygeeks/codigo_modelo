<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="css/bootstrap-4.2.1.min.css">

  @yield('css')

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper-1.14.6.min.js"></script>
  <script src="js/bootstrap-4.2.1.min.js"></script>
</head>
<body>

  @include('layouts.template.alert')

  <div class="container">

    @yield('content')

    @yield('js')

  </div>

</body>
</html>
