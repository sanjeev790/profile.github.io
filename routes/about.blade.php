@extends('front/layout')
@section('container')
	<!-- start banner Area -->
			<section class="about-banner">
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Me				
							</h1>	
							<p class="text-white link-nav"><a href="{{'/'}} ">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> About Me</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				@foreach($about as $a)
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="{{(asset('storage/post/'.$a->image))}}" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>About Me</h6>
							<h1 class="text-uppercase">Personal Details</h1>
							<p>
								{{$a->myself}}.
							</p>
							
						</div>
						<div class="col-lg-12 pt-60">
							<p>
								{{$a->study}}.
							</p>
							<p>
								{{$a->work}}. 								
							</p>
							<h4 class="pt-30">Tools Expertness</h4>	
						</div>
					</div>
					<div class="row skillbar-wraps">					
						<div class="col-lg-6 skill-left">
							<div class="single-skill">
								<p>
									HTML 85%
								</p>
								<div class="skill" data-width="85"></div>
							</div>
							<div class="single-skill">
								<p>
									Photoshop 90%
								</p>
								<div class="skill" data-width="90"></div>
							</div>
							<div class="single-skill">
								<p>
									BOOTSTRAP 70%
								</p>
								<div class="skill" data-width="70"></div>
							</div>																				
						</div>
						<div class="col-lg-6 skill-right">
							<div class="single-skill">
								<p>
									PHP 75%
								</p>
								<div class="skill" data-width="95"></div>
							</div>								
							<div class="single-skill">
								<p>
								   PHP(laravel) 65%
								</p>
								<div class="skill" data-width="85"></div>
							</div>
							<div class="single-skill">
								<p>
								   Javascript 50%
								</p>
								<div class="skill" data-width="55"></div>
							</div>
							
						</div>
					</div>
				</div>	
				@endforeach
			</section>
			<!-- End home-about Area -->	

			<!-- Start timeline Area -->
			<section class="timeline pb-120">
            <div class="text-center">
                <div class="menu-content pb-70">
                    <div class="title text-center">
                        <h1 class="mb-10">My Qualifications</h1>
                        <p>Here is my Qualification which will help you to suggest about me more...</p>
                    </div>
                </div>
            </div>				
			  <ul>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt="">
			        <h4>
			          <time>Marticulation</time>
			          <h2><strong>ST.STEPHEN'S SCHOOL</strong></h2>
			        </h4>
			        <p><b>Session:</b> 2012</p>
			        <p><b>Result:</b><strong> 8.4 CGPA</strong> (In the Scale of 10.00)</p>
				   <div class="skill" data-width="84"></div>

			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt="">
			        <h4>
			          <time>Intermidiate</time>
			          <h2><strong>DAV PUBLIC SCHOOL</strong></h2>

			        </h4>
			      
			        <p><b>Session:</b> 2012-2014</p>
			        <p><b>Result:</b> <strong>82%</strong> (In the Scale of 100%)</p>
				   <div class="skill" data-width="82"></div>

			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt="">
			        <h4>
			          <time>Bachelor in techenology</time>
			          <h2><strong>DUMKA ENGINEERING COLLEGE DUMKA </strong>
			          RUN BY JHARKHAND GOVT.</h2>

			        </h4>
			        <p><b>Session:</b> 2015-19</p>
			        <p><b>Result:</b> <strong>7.9 sgpa</strong>  (In the Scale of 10.00)</p>
				   <div class="skill" data-width="79"></div>

			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt="">
			      	<img class="img-fluid mx-auto d-block mb-30" src="" alt="">
			        <h4>
			          <time>PHP  Developer</time>
			        </h4>
			        <p>2020</p>
				   <div class="skill" data-width="60"></div>

			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt="">
			      	<img class="img-fluid mx-auto d-block mb-30" src="" alt="">
			        <h4>
			          <time>PHP laravel</time>
			        </h4>
			        <p>2020</p>
				   <div class="skill" data-width="60"></div>

			      </div>
			    </li>
			    
			  </ul>
			</section>		

			<!-- End timeline Area -->


				<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Client’s Feedback About Me</h1>
		                        <p>Your views and opinion is making us best and help us to improve and provide the better Services.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                	
		                    <div class="single-testimonial item d-flex flex-row">
		                        
		                        <div class="desc">
		                            <p>
		                              .		     
		                            </p>
		                            <h4></h4>
		                        </div>
		                    </div>
		                   
		                </div>
		            </div>
		        </div>
		    </section>
		    <!-- End testimonial Area -->		
 
		    @endsection	