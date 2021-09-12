 <!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>@yield('title')</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/normalize.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/font-awesome.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/themify-icons.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/pe-icon-7-filled.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/flag-icon.min.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/cs-skin-elastic.css')}}">
      <link rel="stylesheet" href="{{asset('admin_asset/assets/css/style.css')}}">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="{{'/admin/homepage'}}" >Homepage</a>

                  </li>

                  <li class="menu-item-has-children dropdown">
                     <a href="{{'/admin/about'}}" >About</a>
                  </li>
                    <li class="menu-item-has-children dropdown">
                     <a href="{{'/admin/project'}} " > Project</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="{{'/admin/dashboard'}} "><img src="{{asset('front/img/logo.png')}}" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.html"><img src="images/logo2.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome {{session('name')}}</a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="{{'/admin/logout'}}"><i class="fa fa-power-off"></i>Logout  </a>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="content pb-0">
          @section('container')
          @show
        </div>
         <div class="clearfix"></div>
         <footer class="site-footer">
            <div class="footer-inner bg-white">
               <div class="row">
                  <div class="col-sm-6">
                     Copyright &copy; 2020 sanjeev
                  </div>
                  <div class="col-sm-6 text-right">
                     Designed by <a href="https://colorlib.com/">Sanjeev Ranjan</a>
                  </div>
               </div>
            </div>
         </footer>
      </div>
      <script src="{{asset('admin_asset/assets/js/vendor/jquery-2.1.4.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin_asset/assets/js/popper.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin_asset/assets/js/plugins.js')}}" type="text/javascript"></script>
      <script src="{{asset('admin_asset/assets/js/main.js')}}" type="text/javascript"></script>
   </body>
</html>