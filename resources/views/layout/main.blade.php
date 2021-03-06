<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Web Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="\icon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="\icon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="\icon\favicon-16x16.png">
    <link rel="manifest" href="\site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  <!-- Web Icon -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="\css\nav.css">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav>
      <a class="navbar-brand" href="{{ url('/') }}">
        <img src="\img\nav-logo.png">
        <span>ezlaundry</span>
      </a>

      <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/service') }}">Service</a></li>
        <li><a href="{{ url('/reward') }}">Reward</a></li> 
        <li><a class="btn  btn-outline-light btn-sm" href="{{ url('/signin') }}" role="button">Login/Register</a></li>
        </ul>

      <div class="menu-toggle">
         <input type="checkbox" name="" id="">
         <span></span>
         <span></span>
         <span></span>
      </div>
    </nav>
  </header>

  <main>
    @yield('container')
  </main>

  <footer class="footer py-3">
    <div class="container">
      <span>Copyright © 2020 ezlaundry</span>
      <svg class="bi bi-dot" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M8 9.5a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"/>
      </svg>
      <span>All Rights Reserved</span>
    </div>
  </footer>
  <script src="\js\script.js"></script>
</body>
</html>