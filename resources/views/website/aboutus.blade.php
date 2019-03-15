@extends("design.header")
    @section("content")
    
    <?php 
        $web_name = "Glorious Empire Tech"; 
    ?>
    <main>

        <div class="widget-2 text-left pushtop-180 drag-this-up drag-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                    <p class="pretitle">ABOUT US {{$title}}</p>
                        <h3>Our philosophy and what we do</h3>
                        <p class="no-gutter-right">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
                            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores 
                            et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
                            Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elit
                        </p>
                        <p class="pushtop-30">
                            Cng elitr, sed diam nonumy eirmod tempor invidunt ut labore et 
                            dolore magna aliquyam erat, sed diam voluptua. At vero eos et 
                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, 
                            no sea takimata sanctus est Lorem ipsum dolor sit amet.   
                        </p>
                        <a href="#" class="button-link-1 pushtop-30">LEARN MORE</a>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{asset('website/assets/images/widget-2-11.jpg')}}" alt="widget-image" class="pull-left">
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-2 text-left pushtop-180 drag-this-up drag-up">
			<div class="container">
				<div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('website/assets/images/widget-2-10.png')}}" 
                        alt="widget-image" class="pull-left" style="width:700px">
                    </div>
					<div class="col-lg-6" align="right">
						<p class="pretitle">WHAT WE DO</p>
						<h3>We help clients to get more out of business</h3>
						<p style="margin-right:10px; text-align: justify; text-justify: inter-word;">
							Duis autem vel eum iriure dolor in hendrerit in vulputate 
							velit esse molestie consequat, vel illum dolore eu feugiat 
							nulla facilisis at vero eros et accumsan et iusto odio 
							dignissim qui blandit praesent luptatum zzril.
						</p>
						<a href="#" class="button-link-1 alt-bg-2 pushtop-30">WATCH VIDEO</a>
					</div>
					
				</div>
			</div>
		</div>
        <div class="widget-22 no-bg pushtop-260" style="margin-top:30px">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row gauges text-center">
                            <div class="col-sm-6">
                                <div class="gauge-container mx-auto" data-total="5000" data-current="332"></div>
                                <span class="gauge-display-data"></span>
                                <p>Projects done</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="gauge-container mx-auto" data-total="60" data-current="42"></div>
                                <span class="gauge-display-data"></span>
                                <p>Average working time per project</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="gauge-container mx-auto" data-total="130" data-current="129"></div>
                                <span class="gauge-display-data"></span>
                                <p>New clients</p>
                            </div>
                            <div class="col-sm-6">
                                <div class="gauge-container mx-auto" data-total="10000" data-current="8744"></div>
                                <span class="gauge-display-data"></span>
                                <p>Project hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="pretitle">OUR SERVICES</p>
                        <h3 align="left">It is our passion to create high quality</h3>
                        <p style="text-align: justify; text-justify: inter-word;">
                            Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                             doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit 
                             amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
                             <br>
                             Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet
                             doming id quod mazim placerat facer possim assum. Lorem ipsum dolor sit 
                             amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.
                        </p>
                        <a href="#" class="button-link-1 pull-right pushtop-30">GET A QUOTE</a>
                    </div>
                    
                </div>
            </div>
        </div>	

        
        <div class="widget-19 pushtop-130">
            <p class="text-center pretitle">FEATURES AND SERVICES</p>
            <h3 class="text-center">How we satisfy our clients</h3>

            <div class="container">
                <div class="row" align="center">
                    <div class="col-md-4 col-sm-6 pushtop-70">
                        <section>
                            <img src="{{asset('website/assets/images/widget-19-1.png')}}" alt="widget image">
                            <h6>Dashboard Features</h6>
                            <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolor erat.</p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 pushtop-70">
                        <section>
                            <img src="{{asset('website/assets/images/widget-19-2.png')}}" alt="widget image">
                            <h6>Userfriendly Experience</h6>
                            <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea.</p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 pushtop-70">
                        <section>
                            <img src="{{asset('website/assets/images/widget-19-3.png')}}" alt="widget image">
                            <h6>Color Schemes</h6>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 pushtop-70">
                        <section>
                            <img src="{{asset('website/assets/images/widget-19-4.png')}}" alt="widget image">
                            <h6>Different Layouts</h6>
                            <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  </p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 pushtop-70">
                        <section>
                            <img src="{{asset('website/assets/images/widget-19-5.png')}}" alt="widget image">
                            <h6>Vector Based Graphics</h6>
                            <p>Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </section>
                    </div>
                    <div class="col-md-4 col-sm-6 pushtop-70">
                        <section>
                            <img src="{{asset('website/assets/images/widget-19-6.png')}}" alt="widget image">
                            <h6>Pixel Perfect Design</h6>
                            <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.  </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>

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
    </main>
@endsection