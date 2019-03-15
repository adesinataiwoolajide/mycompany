@extends("design.header")
    @section("content")
    
    <?php 
        $web_name = "Glorious Empire Tech"; 
    ?>
    <main>
        <div class="widget-10 pushtop-220" style="margin-top:">
            <div class="container">
                <p class="pretitle">OUR SERVICES</p>
                
                <div class="slick-testimonials-carousel pushtop-50" data-sts="3">
                    <div class="testimonial">
                        
                        <p>
                            Web Design & Development				
                        </p>
                        <div class="testimonial-info pushtop-30">
                            <section class="elm-1 drag-this-left">
                                <div class="image-holder" align="center">
                                    <img src="{{asset('website/assets/images/widget-8-1.png')}}" alt="widget-image">
                                </div>
                                
                                <p>
                                    We Build, Teach and Develop Website Design and Development
                                </p>
                            </section>
                        </div>
                    </div>
                    <div class="testimonial">
                            
                        <p>
                            Andriod and IOS				
                        </p>
                        <div class="testimonial-info pushtop-30">
                            <section class="elm-1 drag-this-left">
                                <div class="image-holder" align="center">
                                    <img src="{{asset('website/assets/images/widget-8-1.png')}}" alt="widget-image">
                                </div>
                                
                                <p>
                                    We Build, Teach and Develop Andriod and IOS
                                </p>
                            </section>
                        </div>
                    </div>
                    <div class="testimonial">
                                
                    <p>
                        Content Management & Development			
                    </p>
                    <div class="testimonial-info pushtop-30">
                        <section class="elm-1 drag-this-left">
                            <div class="image-holder" align="center">
                                <img src="{{asset('website/assets/images/widget-8-1.png')}}" alt="widget-image">
                            </div><br>
                            
                            <p>
                                We Manage and Develop Business Content <br>e.t.c
                            </p>
                        </section>
                    </div>
                </div>
                <div class="testimonial">    
                    <p>
                        Desktop Applications				
                    </p>
                    <div class="testimonial-info pushtop-30">
                        <section class="elm-1 drag-this-left">
                            <div class="image-holder" align="center">
                                <img src="{{asset('website/assets/images/widget-15-4.png')}}" alt="widget-image">
                            </div>
                            <p>
                                We Build, Teach and Develop Desktop Applications
                            </p>
                        </section>
                    </div>
                </div>
                <div class="testimonial">
                        
                    <p>
                            Graphics Design & Animations				
                    </p>
                    <div class="testimonial-info pushtop-30">
                        <section class="elm-1 drag-this-left">
                            <div class="image-holder" align="center">
                                <img src="{{asset('website/assets/images/widget-8-1.png')}}" alt="widget-image">
                            </div>
                            <p>
                                We Build, Teach and Deliver Graphic Contents Using The Latest Technology
                            </p>
                        </section>
                    </div>
                </div>
                <div class="testimonial">
                    
                    <p>
                        Internet Service Provider			
                    </p>
                    <div class="testimonial-info pushtop-30">
                        <section class="elm-1 drag-this-left">
                            <div class="image-holder" align="center">
                                <img src="{{asset('website/assets/images/widget-8-1.png')}}" alt="widget-image">
                            </div>
                            <p>
                                We provide Internet facilities for Homes, Offices, Stores e.t.c
                            </p>
                        </section>
                    </div>
                    
                </div>
            </div>
            <div align="right"><a href="{{route('service.website')}}" class="button-link-1 pushtop-30">READ MORE</a></div>
            
        </div>
        
        <div class="widget-2 text-right pushtop-180 drag-this-up" style="margin-top:">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('website/assets/images/widget-2-2.png')}}" alt="widget-image" 
                        class="" style="height: 500px;" align="left">
                    </div>
                    <div class="col-lg-6">
                        <p class="pretitle">ABOUT {{$web_name}}</p>
                        
                        <h3>Check our services and expertise</h3>
                        <p  style="text-align: justify; text-justify: inter-word;">
                            It is our passion to create high quality It is our passion to create high quality
                            It is our passion to create high quality It is our passion to create high quality
                            It is our passion to create high quality It is our passion to create high quality
                            It is our passion to create high quality It is our passion to create high quality
                            It is our passion to create high quality It is our passion to create high quality.
                            It is our passion to create high quality It is our passion to create high quality
                            
                        </p>
                        <a href="{{route('aboutus.website')}}" class="button-link-1 pushtop-30 pull-right">
                            READ MORE</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="widget-17">
            <div class="container text-center">
                <p class="pretitle">WHAT WE DO</p>
                <h3>Our Services</h3>
                <div class="row pushtop-50">
                    <div class="col-md-4 col-sm-6">
                        <section>
                            <div class="image-holder">
                                <img src="{{asset('website/assets/images/widget-17-1.png')}}" alt="widget-image">	
                            </div>
                            <h6>Plan your strategy</h6>
                            <p>
                                
                            </p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <section>
                            <div class="image-holder">
                                <img src="{{asset('website/assets/images/widget-17-2.png')}}" alt="widget-image">
                            </div>
                            <h6>Create your utilities</h6>
                            <p>
                               
                            </p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <section>
                            <div class="image-holder">
                                <img src="{{asset('website/assets/images/widget-17-3.png')}}" alt="widget-image">
                            </div>
                            <h6>Manage your time</h6>
                            <p>
                                
                            </p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <section>
                            <div class="image-holder">
                                <img src="{{asset('website/assets/images/widget-17-4.png')}}" alt="widget-image">
                            </div>
                            <h6>Brainstorm ideas</h6>
                            <p>
                               
                            </p>
                        </section>
                    </div>
                    <div class="col-md-8 text-left pushtop-50">
                        <form method="GET" action="http://vasbak.online/">
                            <h4>Join our community and friends</h4>
                            <p>
                                
                            </p>
                            <div class="input-wrapper">
                                <input type="email" name="mail" placeholder="e-mail address">
                                <input type="submit" value="SUBSCRIBE">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        
    
        <div class="widget-3 pushtop-220 drag-this-up" style="margin-top:">
            <div class="container-fluid">
                <p class="pretitle text-center">CASE STUDIES</p>
                <h3 class="text-center">Our Portfolio</h3>
                
                <div id="portfolio-widget-tab-content" class="row pushtop-50">
                    <div class="col-lg-3 col-sm-6 default portfolio-typo">
                        <a href="#" class="portfolio-item">
                            <img src="{{asset('website/assets/images/portfolio-1.jpg')}}" alt="blog">
                            <div class="inner-wrapper">
                                <div class="plus-sign"><span>+</span></div>
                                <h6>Hospital Management</h6>
                                <p>Web Software</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign">
                        <a href="#" class="portfolio-item">
                            <img src="{{asset('website/assets/images/portfolio-2.jpg')}}" alt="blog">
                            <div class="inner-wrapper">
                                <div class="plus-sign"><span>+</span></div>
                                <h6>GET-E Learning</h6>
                                <p>Web Software</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign">
                        <a href="#" class="portfolio-item">
                            <img src="{{asset('website/assets/images/portfolio-2.jpg')}}" alt="blog">
                            <div class="inner-wrapper">
                                <div class="plus-sign"><span>+</span></div>
                                <h6>GET-E Portal</h6>
                                <p>Web Software</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 default portfolio-branding portfolio-webdesign">
                        <a href="#" class="portfolio-item">
                            <img src="{{asset('website/assets/images/portfolio-2.jpg')}}" alt="blog">
                            <div class="inner-wrapper">
                                <div class="plus-sign"><span>+</span></div>
                                <h6>GET-Inventory</h6>
                                <p>Web and Desktop </p>
                            </div>
                        </a>
                    </div>
                </div>
                <a href="#" id="load-more" class="button-link-1 mx-auto">LOAD MORE</a>
            </div>
        </div>

        <div class="widget-10 pushtop-220" style="margin-top:">>
			<div class="container">
				<p class="pretitle">CLIENT TESTIMONIALS</p>
				<h3>What our clients say</h3>
				<div class="slick-testimonials-carousel pushtop-50" data-sts="3">
					<div class="testimonial">
						<div class="quotes">“</div>
						<p>
							“Client Testimony.”						
						</p>
						<div class="testimonial-info pushtop-30">
							<img src="{{asset('website/assets/images/testimonial2.png')}}" alt="testimonial" class="pull-left avatar">
							<a href="#" class="name link-hover">Diana Moore</a>
							<ul class="person-social pushtop-10">
								<li>
									<a href="#"><i class="fa fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-dribbble"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="testimonial">
						<div class="quotes">“</div>
						<p>
							“Client Testimony.”
						</p>
						<div class="testimonial-info pushtop-30">
							<img src="{{asset('website/assets/images/testimonial3.png')}}" alt="testimonial" class="pull-left avatar">
							<a href="#" class="name link-hover">Alexandra Jones</a>
							<ul class="person-social pushtop-10">
								<li>
									<a href="#"><i class="fa fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-dribbble"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="testimonial">
						<div class="quotes">“</div>
						<p>
							“Client Testimony.”
						</p>
						<div class="testimonial-info pushtop-30">
							<img src="{{asset('website/assets/images/testimonial1.png')}}" alt="testimonial" class="pull-left avatar">
							<a href="#" class="name link-hover">Megan Novalum</a>
							<ul class="person-social pushtop-10">
								<li>
									<a href="#"><i class="fa fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-dribbble"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="testimonial">
						<div class="quotes">“</div>
						<p>
							“Client Testimony.”
						</p>
						<div class="testimonial-info pushtop-30">
							<img src="{{asset('website/assets/images/testimonial4.png')}}" alt="testimonial" class="pull-left avatar">
							<a href="#" class="name link-hover">John Alliston</a>
							<ul class="person-social pushtop-10">
								<li>
									<a href="#"><i class="fa fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-dribbble"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    
        <div class="widget-11 light-background pushtop-100">
            <div class="container-fluid text-center">
                <p class="pretitle">WHAT WE DO</p>
                <h3>Check our features</h3>
                <div class="row pushtop-70">
                    <div class="col-lg-4 text-right">
                        <div class="widget-11-elm clearfix drag-this-left">
                            <img src="{{asset('website/assets/images/widget-11-1.png')}}" class="pull-right" alt="widget-img">
                            <section>
                                <h6><a href="#">Intelligent Strategies</a></h6>
                                <p>
                                    
                                </p>
                            </section>
                        </div>
                        <div class="widget-11-elm clearfix drag-this-left">
                            <img src="{{asset('website/assets/images/widget-11-2.png')}}" class="pull-right" alt="widget-img">
                            <section>
                                <h6><a href="#">Awesome statistics</a></h6>
                                <p>
                                    
                                </p>
                            </section>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img-container drag-this-up">
                            <img src="{{asset('website/assets/images/widget-11.png')}}" alt="widget-img" class="img-fluid">	
                        </div>
                    </div>
                    <div class="col-lg-4 text-left">
                        <div class="widget-11-elm clearfix drag-this-right">
                            <img src="{{asset('website/assets/images/widget-11-3.png')}}" class="pull-left" alt="widget-img">
                            <section>
                                <h6><a href="#">Intelligent Strategies</a></h6>
                                <p>
                                    
                                </p>
                            </section>
                        </div>
                        <div class="widget-11-elm clearfix drag-this-right">
                            <img src="{{asset('website/assets/images/widget-11-4.png')}}" class="pull-left" alt="widget-img">
                            <section>
                                <h6><a href="#">Awesome statistics</a></h6>
                                <p>
                                    
                                </p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="widget-7">
            <div class="rising-elements text-center">
                <div class="rising-elm elm-1" data-trigger="400">
                    <div class="rising-inner">
                        <img src="{{asset('website/assets/images/widget-7-elm-1.png')}}" alt="element-image">
                        <h6>Starting with an idea</h6>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                    <div class="img-pin"></div>
                </div><div class="rising-elm elm-2" data-trigger="800">
                    <div class="rising-inner">
                        <img src="{{asset('website/assets/images/widget-7-elm-2.png')}}" alt="element-image">
                        <h6>Creating Concepts</h6>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
                    </div>
                    <div class="img-pin"></div>
                </div><div class="rising-elm elm-3" data-trigger="600">
                    <div class="rising-inner">
                        <img src="{{asset('website/assets/images/widget-7-elm-3.png')}}" alt="element-image">
                        <h6>Managing and development</h6>
                        <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                    <div class="img-pin"></div>
                </div><div class="rising-elm elm-4" data-trigger="400">
                    <div class="rising-inner">
                        <img src="{{asset('website/assets/images/widget-7-elm-4.png')}}" alt="element-image">
                        <h6>Design refinements</h6>
                        <p>Deirmod tempor invidunt ut labore et nonumy eirmod tempor invidunt.</p>
                    </div>
                    <div class="img-pin"></div>
                </div>
            </div>

            <div class="widget-7-main text-center">
                <div class="container">
                    <p>WHAT WE DO</p>
                    <h3>Our Product Features</h3>
                    <p class="mx-auto">
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel 
                        illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui 
                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
                    </p>
                </div>
                <div class="buttons pushtop-50">
                    <a href="#" class="button-link-1">GET STARTED <i class="fa fa-caret-right"></i></a>
                    <a href="#" class="button-link-1">LOGIN NOW</a>
                </div>
            </div>
        </div> --}}
        <div class="widget-13 pushtop-50">
            <div class="container">
                <div class="partners clearfix">
                    <a href="#" class="partner">
                        <img src="{{asset('website/assets/images/logo/1543068292880.jpg')}}" 
                        alt="partner" style="height:120px">
                    </a>   
                    <a href="#" class="partner">
                        <img src="{{asset('website/assets/images/logo/1543068293469.jpg')}}" 
                        alt="partner" style="height:120px">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{asset('website/assets/images/logo/1543068292725.jpg')}}" 
                        alt="partner" style="height:120px">
                    </a>   
                    <a href="#" class="partner">
                        <img src="{{asset('website/assets/images/logo/taiwo logo copy4.jpg')}}" 
                        alt="partner" style="height:120px">
                    </a>
                    <a href="#" class="partner">
                        <img src="{{asset('website/assets/images/logo/taiwo logo copy5.jpg')}}" 
                        alt="partner" style="height:120px">
                    </a>   
                </div>
            </div>
		</div>
        <a href="#"></a>
        {{-- <div class="widget-12 text-center">
            <div class="container">
                <p class="pretitle">GET STARTED TODAY</p>
                <h3>Invest in your money wisely</h3>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        
                    </div>
                </div>
                <div class="buttons pushtop-50">
                    <a href="#" class="button-link-1">CONTACT US <i class="fa fa-caret-right"></i></a>
                    <a href="#" class="button-link-1">LOGIN NOW</a>
                </div>
            </div>
        </div> --}}
    </main>


@endsection