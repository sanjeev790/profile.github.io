	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Personal</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('front/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/jquery-ui.css')}}">				
			<link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}">							
			<link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">					
			<link rel="stylesheet" href="{{asset('front/css/main.css')}}">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="{{'/'}}"><img src="{{asset('front/img/logo.png')}}" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="{{'/'}}">Home</a></li>
			          <li><a href="{{'about'}}">About</a></li>
			          <li><a href="{{'services'}}">Services</a></li>
			          <li><a href="{{'portfolio'}}">Portfolio</a></li>
			          <!-- <li class="menu-has-children"><a href="">Blog</a>
			            <ul>
			              <li><a href="blog-home.html">Blog Home</a></li>
			              <li><a href="blog-single.html">Blog Single</a></li>
			            </ul>
			          </li>	 -->
			          					          					          		          
			          <li><a href="{{'contact'}}">Contact</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->
			  
		
			@section('container')
			@show	


            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                        	  <div class="single-footer-widget">
                                 <h4>About Me</h4>
                                  
                                 <p>
                                    This is Sanjeev Ranjan ,an Electrical Engg. by qualification and a php Web developer by proffession .

                                </p>
                                  
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">sanjeev</a>, distributed by <strong><a>sanjeev</a></strong>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                            
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>Newsletter</h4>
                                <p>Stay updated with our latest trends</p>
								<div class="" id="mc_embed_signup">
									 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
									  <div class="input-group">
									    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
									    <div class="input-group-btn">
									      <button class="btn btn-default" type="submit">
									        <span class="lnr lnr-arrow-right"></span>
									      </button>    
									    </div>
									    	<div class="info"></div>  
									  </div>
									</form> 
								</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="https://www.facebook.com/sanjeev.srm2016"><i class="fa fa-facebook"></i></a>
                                    <!-- <a href="#"><i class="fa fa-twitter"></i></a> -->
                                    <a href="https://www.instagram.com/sanjeev8240/"><i class="fa fa-instagram"></i></a>
                                    <!-- <a href="#"><i class="fa fa-letter"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="{{asset('front/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="{{asset('front/js/popper.min.js')}}"></script>
			<script src="{{asset('front/js/vendor/bootstrap.min.js')}}"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="{{asset('front/js/easing.min.js')}}"></script>			
			<script src="{{asset('front/js/hoverIntent.js')}}"></script>
			<script src="{{asset('front/js/superfish.min.js')}}"></script>	
			<script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>	
    		<script src="{{asset('front/js/jquery.tabs.min.js')}}"></script>						
			<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>	
            <script src="{{asset('front/js/isotope.pkgd.min.js')}}"></script>			
			<script src="{{asset('front/js/waypoints.min.js')}}"></script>
			<script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('front/js/simple-skillbar.js')}}"></script>							
			<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>							
			<script src="{{asset('front/js/mail-script.js')}}"></script>	
			<script src="{{asset('front/js/main.js')}}"></script>


		</body>
	</html>