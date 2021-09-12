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
								{{$a->about}}.
							</p>
							
						</div>
						<div class="col-lg-12 pt-60">
							<p>
								{{$a->education}}.
							</p>
							<p>
								{{$a->work}}. 								
							</p>
							<h4 class="pt-30">Tools Expertness</h4>	
						</div>
					</div>

					<div class="row skillbar-wraps">					
						<div class="col-lg-6 skill-left">
							<h4 class="pt-30">WEB Development</h4>	

							<div class="single-skill">
								<p>
								   PHP(laravel) 65%
								</p>
								<div class="skill" data-width="85"></div>
							</div>
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
							<div class="single-skill">
								<p>
								   Javascript 50%
								</p>
								<div class="skill" data-width="55"></div>
							</div>																			
						</div>

						<div class="col-lg-6 skill-right">
							<h4 class="pt-30">Data Science</h4>	
						
							<div class="single-skill">
								<p>
								   Python 50%
								</p>
								<div class="skill" data-width="55"></div>
							</div>
							<div class="single-skill">
								<p>
								   Supervised learning 50%
								</p>
								<div class="skill" data-width="55"></div>
							</div>
							<div class="single-skill">
								<p>
								   Machine learning 50%
								</p>
								<div class="skill" data-width="55"></div>
							</div>
							<div class="single-skill">
								<p>
								   Natural language processing(NLP) 50%
								</p>
								<div class="skill" data-width="55"></div>
							</div>
							<div class="single-skill">
								<p>
								   PREDICIVE MODELING
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
			      	<!-- <img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/about/c-logo.png')}}" alt="" height="100px"> -->
			        <h4>
			          <time>Data Scientist</time><br><br> E&cit academy <br><strong>IIT ROORKEE</strong>
			          
			        </h4>
			        <p><b>Session:</b> 2021</p>
			        <p><b>Result:</b><strong> 8.4 </strong> (In the Scale of 10.00)</p>
				   <div class="skill" data-width="84"></div>

			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<!-- <img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt=""> -->
			        <h4>
			          <time>Bachelor in techenology</time><br><br>
			         DUMKA ENGINEERING COLLEGE DUMKA
			         </h4>
			        <p><b>Session:</b> 2015-19</p>
			        <p><b>Result:</b> <strong>8.24 sgpa</strong>  (In the Scale of 10.00)</p>
				   <div class="skill" data-width="82"></div>

			      </div>
			    </li>
			     <li>
			      <div class="content">
			      	<!-- <img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt=""> -->
			        <h4>
			          <time>Intermidiate</time><br><br>
			          <h2>DAV PUBLIC SCHOOL</h2>

			        </h4>
			      
			        <p><b>Session:</b> 2012-2014</p>
			        <p><b>Result:</b> <strong>82%</strong> (In the Scale of 100%)</p>
				   <div class="skill" data-width="82"></div>

			      </div>
			    </li>
			    <li>
			      <div class="content">
			      	<!-- <img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/about/c-logo.png')}}" alt="" height="100px"> -->
			        <h4>
			          <time>Marticulation</time><br><br>
			          <h2>ST.STEPHEN'S SCHOOL</h2>
			        </h4>
			        <p><b>Session:</b> 2012</p>
			        <p><b>Result:</b><strong> 8.4 CGPA</strong> (In the Scale of 10.00)</p>
				   <div class="skill" data-width="84"></div>

			      </div>
			    </li>
			   <!--  <li>
			      <div class="content">
			      	<img class="img-fluid mx-auto d-block mb-30" src="{{asset('front/img/img1.png')}} " alt="">
			      	<img class="img-fluid mx-auto d-block mb-30" src="" alt="">
			        <h4>
			          <time>PHP  Developer</time>
			        </h4>
			        <p>2020</p>
				   <div class="skill" data-width="60"></div>

			      </div>
			    </li> -->
			    
			  </ul>
			</section>		

			<!-- End timeline Area -->


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
 
		    @endsection	