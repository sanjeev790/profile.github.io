 @extends('front/layout')
@section('container')
			<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Portfolio				
							</h1>	
							<p class="text-white link-nav"><a href="{{'/'}} ">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Portfolio</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
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
	                            		<!-- <div class="overlay overlay-bg"></div> -->
	                            		 <a href="https://sanjeevranjan18.github.io/bootstrap.git.io/" target="_blank"><img class="image img-fluid" src="{{asset('front/img/p7.png')}}" alt=""></a>
	                            	</div>
								<!-- 	<a href="{{asset('front/img/p1.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
								</a>  -->                             		
                            	</div>
								<div class="p-inner">
								    <h4><a href="https://sanjeevranjan18.github.io/bootstrap.git.io/">Resturant</a></h4>
									<div class="cat">vector</div>
								</div>					                               
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p2.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('front/img/p2.jpg')}}" class="img-pop-up">	
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
									<a href="{{asset('front/img/p3.jpg')}}" class="img-pop-up">	
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
	                            	<!-- 	<div class="overlay overlay-bg"></div> -->
	                            		<a href="https://sanjeevranjan18.github.io/profileweb.github.io/"> <img class="image img-fluid" src="{{asset('front/img/p8.png')}}" alt=""></a>
	                            	</div>
								<!-- 	<a href="{{asset('front/img/p4.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
									</a>  -->                           		
                            	</div> 
                                <div class="p-inner">
                                    <h4><a href="https://sanjeevranjan18.github.io/profileweb.github.io/">Coaching</a></h4>
                                    <div class="cat">Portal</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="{{asset('front/img/p5.jpg')}}" alt="">
	                            	</div>
									<a href="{{asset('front/img/p5.jpg')}}" class="img-pop-up">	
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
	                          <!--   		<div class="overlay overlay-bg"></div> -->
	                            		<a href="https://sanjeevranjan18.github.io/myresume.github.io/"> <img class="image img-fluid" src="{{asset('front/img/p9.png')}}" alt=""></a>
	                            	</div>
									<!-- <a href="{{asset('front/img/p6.jpg')}}" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="{{asset('front/img/preview.png')}}" alt=""></div>
									  </div>
									</a> -->                             		
                            	</div>
                                <div class="p-inner">
                                    <h4><a href="https://sanjeevranjan18.github.io/myresume.github.io/">Resume Type</a></h4>
                                    <div class="cat">raster</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End portfolio-area Area -->
            @endsection