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
			          <li><a href="{{'/about'}}">About</a></li>
			          <li><a href="{{'/services'}}">Services</a></li>
			            <li><a href="{{'/contact'}}">Contact</a></li>
			          <li><a href="{{'/admin/login'}}" class="genric-btn primary circle">Make Changes</a></li>

			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			@foreach($banners as $b)
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>This is me</h6>
							<h1>{{$b->title}}</h1>
							<p>
								{{$b->sub_title}}
							</p>
							<a href="{{'/about'}}" class="primary-btn text-uppercase">discover now</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="{{asset('storage/post/'.$b->image)}}" alt="">
						</div>
					</div>
				</div>					
			</section>
			@endforeach
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="{{asset('front/img/about-img.png')}}" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<!-- <h6>About Me</h6> -->
							<h1 class="text-uppercase">Personal Details</h1>
							<p>
								Here, I focus on a range of items and features that we use in business without giving them a second thought. Data Reading and analyzing really excies me to perform analysis in the data.
							</p>
							<a href="{{'/about'}}" class="primary-btn text-uppercase">View Full Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start services Area -->
			<section class="services-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">My Offered Services</h1>
		                        <p>At about this time of year, some months after New Year???s resolutions have been made and kept, or made and neglected.</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-pie-chart"></span>
								<a href="#"><h4>Web Design</h4></a>
								<p>
									???It is not because things are difficult that we do not dare; it is because we do not dare that they are difficult.???
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-laptop-phone"></span>
								<a href="#"><h4>Web Development</h4></a>
								<p>
									If you are an entrepreneur, you know that your success cannot depend on the opinions of others. Like the wind, opinions.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-camera"></span>
								<a href="#"><h4>Data Analysis</h4></a>
								<p>
									Do you want to be even more successful? Data says everything about the business. The more effort you put into improving your skills.
								</p>
							</div>	
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-picture"></span>
								<a href="#"><h4>NLP</h4></a>
								<p>
									Natural language processing is the process by which we can commumicate with the machine in human language.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-tablet"></span>
								<a href="#"><h4>Apps Interface</h4></a>
								<p>
									Do you sometimes have the feeling that you???re running into the same obstacles over and over again? Many of my conflicts.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-rocket"></span>
								<a href="#"><h4>Graphic Design</h4></a>
								<p>
									You???ve heard the expression, ???Just believe it and it will come.??? Well, technically, that is true, however, ???believing??? is not just thinking that.
								</p>
							</div>				
						</div>														
					</div>
				</div>	
			</section>
			<!-- End services Area -->	

			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">6784</h1>
							<p>Happy Clients</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee</p>
						</div>	
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">435</h1>
							<p>Real Professionals</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->	

			<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Latest Featured Projects</h1>
		                        <p>Who are in extremely love with eco friendly system.</p>
		                    </div>
		                </div>
		            </div>
                    
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Vector</li>
                            <li data-filter=".raster">Raster</li>
                            <li data-filter=".ui">UI/UX</li>
                            <li data-filter=".printing">Printing</li>
                        </ul>
                    </div>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p1.jpg')}}" alt="">
	                            	</div>
									<a href="img/p1.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>2D Vinyl Design</h4>
									<div class="cat">vector</div>
								</div>					                               
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p2.jpg')}}" alt="">
	                            	</div>
									<a href="img/p2.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>2D Vinyl Design</h4>
									<div class="cat">vector</div>
								</div>					                               
                            </div>                            
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p3.jpg')}}" alt="">
	                            	</div>
									<a href="img/p3.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <h4>Creative Poster Design</h4>
                                    <div class="cat">Agency</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all printing">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p4.jpg')}}" alt="">
	                            	</div>
									<a href="img/p4.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                                <div class="p-inner">
                                    <h4>Embosed Logo Design</h4>
                                    <div class="cat">Portal</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p5.jpg')}}" alt="">
	                            	</div>
									<a href="img/p5.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>3D Helmet Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p6.jpg')}}" alt="">
	                            	</div>
									<a href="img/p6.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">raster</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End portfolio-area Area -->	

			<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">People's Feedback About Me</h1>
		                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                   @foreach($feedback as $i)
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <!-- <img class="img-fluid" src="img/elements/user1.png" alt=""> -->
		                        </div>
		                        <div class="desc">
		                            <p>
		                               {{$i->message}}.		     
		                            </p>
		                            <h4>{{$i->name}}</h4>
		                            <p>{{$i->subject}}</p>
		                        </div>
		                    </div>
		                    
		                   @endforeach
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->
		
			<!-- Start price Area -->
			<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choose Your Plan</h1>
								<p>I care the trus you placed with me .</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Data Analysis</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Sales increase with atleast 5%</li>
									<li>1 year service</li>
									<li>24*7 consultant</li>
								</ul>
							</div>
						<!-- 	<div class="bottom-part">
								<h1>RS.20000/-*</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div> -->
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business Website</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Suitable Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<!-- <div class="bottom-part">
								<h1>RS15000/-*</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div> -->
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<!-- <div class="bottom-part">
								<h1>RS.35000/-</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div> -->
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>NATURAL LANNGUAGE PROCESSING</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Data pre processing</li>
									<li>Data visualization</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<!-- <div class="bottom-part">
								<h1>RS.20000/-*</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div> -->
						</div>																		
					</div>
				</div>	
			</section>
			<!-- End price Area -->			
	
			<!-- Start recent-blog Area -->
			<!-- <section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Latest posts from our blog</h1>
							<p>
								You may be a skillful, effective employer but if you don???t trust your personnel and the opposite, then the chances of improving and expanding the business
							</p>
						</div>
					</div>
					<div class="row">	
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="{{asset('front/img/b1.jpg')}}" alt="">	
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="{{asset('front/img/user.png')}}" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>							
							<a href="#">
								<h4>Break Through Self Doubt
								And Fear</h4>
							</a>
							<p>
								Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="{{asset('front/img/b2.jpg')}}" alt="">	
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="{{asset('front/img/user.png')}}" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>							
							<a href="#">
								<h4>Portable Fashion for
								young women</h4>
							</a>
							<p>
								You may be a skillful, effective employer but if you don???t trust your personnel and the opposite, then the chances of improving.
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="{{asset('front/img/b3.jpg')}}" alt="">	
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="{{asset('front/img/user.png')}}" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>							
							<a href="#">
								<h4>Do Dreams Serve As
								A Premonition</h4>
							</a>
							<p>
								So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don???t want to work involved.
							</p>
						</div>												
											
												
					</div>
				</div>	
			</section> -->
			<!-- end recent-blog Area -->		

		    <!-- Start brands Area -->
		<!--     <section class="brands-area">
		        <div class="container">
		            <div class="brand-wrap">
		                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="{{asset('front/img/l1.png')}}" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="{{asset('front/img/l2.png')}}" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="{{asset('front/img/l3.png')}}" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="{{asset('front/img/l4.png')}}" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="{{asset('front/img/l5.png')}}" alt=""></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section> -->
		    <!-- End brands Area -->			

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h4>About Me</h4>
                                <p>
                                    We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                                </p>
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by sanjeev.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                      <!--   <div class="col-lg-5 col-md-6 col-sm-6">
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
                        </div> -->
                        <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                            <div class="single-footer-widget">
                                <h4>Follow Me</h4>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
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