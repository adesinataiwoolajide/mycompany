@extends("design.header")
    @section("content")
    
    <?php 
        $web_name = "Glorious Empire Tech"; 
    ?>
    <main>
        <div class="widget-3 pushtop-220 drag-this-up" style="margin-top: 30px">
            <div class="container-fluid">
                <p class="pretitle text-center">Glorious Empire Tech</p>
                <h3 class="text-center">Our Portfolio Below</h3>
                
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
                {{-- <ul class="blog-pagination pushtop-50" align="center">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                    </ul> --}}
            </div>
        </div>

        
        <div class="widget-16 pushtop-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 pushtop-50">
                        <p class="pretitle">TESTIMONIALS</p>
                        <h3>What our clients say</h3>
                        <a href="#" class="button-link-1 pushtop-80">BECOME A PARTNER</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="slick-testimonials-carousel pulltop-50">
                            <div class="testimonial">
                                <div class="quotes">“</div>
                                <p>
                                    “<div class="testimonial">
                                        <div class="quotes">“</div>
                                        <p>
                                        “Glorious Empire Tech” 
                                        </p>
                                        <div class="testimonial-info pushtop-30">
                                            <img src="{{asset('website/assets/images/testimonial4.png')}}" alt="testimonial" class="pull-left avatar">
                                            <a href="#" class="name link-hover">Cadlinks</a>
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
                                    </div>” 					
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
                                    “Glorious Empire Tech” 
                                </p>
                                <div class="testimonial-info pushtop-30">
                                    <img src="{{asset('website/assets/images/testimonial3.png')}}" alt="testimonial" class="pull-left avatar">
                                    <a href="#" class="name link-hover">Brent</a>
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
                                    “Glorious Empire Tech” 
                                </p>
                                <div class="testimonial-info pushtop-30">
                                    <img src="{{asset('website/assets/images/testimonial1.png')}}" alt="testimonial" class="pull-left avatar">
                                    <a href="#" class="name link-hover">APMIS</a>
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
                                    “Glorious Empire Tech” 
                                </p>
                                <div class="testimonial-info pushtop-30">
                                    <img src="{{asset('website/assets/images/testimonial4.png')}}" alt="testimonial" class="pull-left avatar">
                                    <a href="#" class="name link-hover">Cadlinks</a>
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
                                    “Glorious Empire Tech” 
                                </p>
                                <div class="testimonial-info pushtop-30">
                                    <img src="{{asset('website/assets/images/testimonial4.png')}}" alt="testimonial" class="pull-left avatar">
                                    <a href="#" class="name link-hover">Coopco</a>
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
                                    “Glorious Empire Tech” 
                                </p>
                                <div class="testimonial-info pushtop-30">
                                    <img src="{{asset('website/assets/images/testimonial4.png')}}" alt="testimonial" class="pull-left avatar">
                                    <a href="#" class="name link-hover">Moses and Grace College of Health Science and Technology</a>
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
            </div>
        </div>
        <div class="widget-13 pushtop-50" style="nmargin-top: 200px">
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
    </main>

@endsection