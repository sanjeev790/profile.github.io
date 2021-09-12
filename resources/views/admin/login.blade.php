<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
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
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="post" action="{{'login_submit'}}">
                     @csrf
                     <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="User id" required="">
                     </div>
                     <div class="form-group">
                        <input type="text" name="password" class="form-control" placeholder="Password">
                     </div>
                     <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                     {{session('msg')}}
               </form>
                  <a href="{{'/'}} "><span class="lnr lnr-arrow-right"><i class="fa fa-globe" aria-hidden="true"></i></span></a>

               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>