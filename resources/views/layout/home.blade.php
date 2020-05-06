<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Web Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="\icon\apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="\icon\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="\icon\favicon-16x16.png">
    <link rel="manifest" href="\site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  <!-- Web Icon -->
  <title>Ezlaundry</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="\css\profile.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
      <div class="bg_shadow"></div>
      <div class="site_nav">
          <div class="close">
            <i class="fas fa-times"></i>
          </div>
          
          <div class="profile_info">
              <div class="profile_img">
                <img src="\img\dummy.jpg" alt="profile_img">
              </div>
              <div class="profile_data">
                  <p class="name">John Doe</p>
              </div>
          </div>
        
          <ul class="siderbar_menu">
            <li class="active">
              <a href="{{ url('/user/profile') }}">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="title">Profile</div>
              </a> 
            </li>  
            <li>
              <a href="{{ url('/user/reward') }}">
                <div class="icon"><i class="fas fa-award"></i></div>
                <div class="title">Reward</div>
              </a>
            </li>  
            <li>
              <a href="{{ url('/user/order') }}">
                <div class="icon"><i class="fas fa-cart-plus"></i></div>
                <div class="title">Buat Pesanan</div>
              </a>
            </li>  
            <li>
              <a href="{{ url('/user/history') }}">
                <div class="icon"><i class="fas fa-receipt"></i></div>
                <div class="title">Riwayat Pesanan</div>
              </a>            
            </li>  
            <li>
              <a href="#">
                <div class="icon"><i class="fas fa-sign-out-alt"></i></div>
                <div class="title">Logout</div>
              </a>
            </li>  
          </ul>
          <div class="copyright">
            <span>© 2020 All Rights Reserved</span>
          </div>
      </div>
    </div>

    <div class="main_container">
      <div class="navbar">
        <div class="hamburger">
          <i class="fas fa-bars"></i>
        </div>
        <div class="logo">
          <a href="#">Ezlaundry</a>
        </div>
      </div>
      <div class="content">
        @yield('container')
      </div>
    </div>

  </div>
  <!-- Script and related things-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".siderbar_menu li").click(function(){
          $(".siderbar_menu li").removeClass("active");
          $(this).addClass("active");
        });

        $(".hamburger").click(function(){
          $(".wrapper").addClass("active");
        });

        $(".close, .bg_shadow").click(function(){
          $(".wrapper").removeClass("active");
        });
      });
    </script>
  <!-- Script and related things-->
</body>
</html>