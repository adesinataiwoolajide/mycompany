@extends("design.header")
    @section("content")
    
    <?php 
        $web_name = "Glorious Empire Tech"; 
    ?>
    <main>

        <div class="widget-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 pushtop-30">
                        <section class="elm-1 drag-this-left">
                            <div class="image-holder">
                                <img src="{{asset('website/assets/images/widget-8-1.png')}}" alt="widget-image">
                            </div>
                            <h6>From the idea to product</h6>
                            <p>
                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                invidunt ut labore et dolor erat, sed diam voluptua.
                            </p>
                        </section>
                    </div>
                    <div class="col-md-4 pushtop-30">
                        <section class="elm-2 drag-this-up">
                            <div class="image-holder">	
                                <img src="{{asset('website/assets/images/widget-8-2.png')}}" alt="widget-image">
                            </div>
                            <h6>Start with your business</h6>
                            <p>
                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                invidunt ut labore et dolor erat, sed diam voluptua.
                            </p>
                        </section>
                    </div>
                    <div class="col-md-4 pushtop-30">
                        <section class="elm-3 drag-this-right">
                            <div class="image-holder">
                                <img src="{{asset('website/assets/images/widget-8-3.png')}}" alt="widget-image">
                            </div>
                            <h6>From the idea to product</h6>
                            <p>
                                Consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                invidunt ut labore et dolor erat, sed diam voluptua.
                            </p>
                        </section>
                    </div>
                </div>
            </div>
        </div>	
    

        <div class="widget-23 pushtop-130">
            <p class="pretitle text-center">WHO WE ARE</p>
            <h3 class="text-center">Our Team</h3>

            <div class="container">
                <div class="team-widget-tabs clearfix text-center">
                    <ul class="clearfix pushtop-30">
                        <li><a data-filter=".default" href="#" class="active link-hover">ALL</a></li>
                        <li><a data-filter=".team-designer" href="#" class="link-hover">DESIGNER</a></li>
                        <li><a data-filter=".team-developer" href="#" class="link-hover">DEVELOPER</a></li>
                        <li><a data-filter=".team-office" href="#" class="link-hover">OFFICE</a></li>
                        <li><a data-filter=".team-marketing" href="#" class="link-hover">MARKETING</a></li>
                    </ul>
                </div>
                <div id="team-widget-tab-content" class="row">
                    <div class="col-lg-3 col-md-6 default team-designer">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team1.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Alexander Oblak</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-designer">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team2.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Jack Mannings</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-developer">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team3.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Sussie Wisperling</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-office">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team4.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Katy Holmes</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-marketing">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team5.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Kevin Pontiak</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-marketing">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team6.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Jonathan Jackson</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-developer">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team7.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">John Kommalr</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 default team-developer">
                        <div class="team-member">
                            <img src="{{asset('website/assets/images/team8.jpg')}}" class="img-fluid" alt="avatar">
                            <a href="#" class="link-hover">Jack Pauler</a>
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
                            <p>
                                Ut wisi enim ad minim veniam, quis nostrud 
                                exerci tation ullamcorper suscipit lobortis 
                                nisl ut aliquip ex ea commodo consequat. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-17" style="width:">
            <div class="container text-center">
                <div class="col-md-12 text-left pushtop-50">
                    <form method="GET" action="http://vasbak.online/">
                        <h4>Join our community and friends</h4>
                        <p>
                            At vero eos et accusam et justo duo dolores 
                            et ea rebum. Stet clita kasd gubergren, no sea 
                            takimata sanctus est Lorem ipsum dolor. 
                        </p>
                        <div class="input-wrapper">
                            <input type="email" name="mail" placeholder="e-mail address">
                            <input type="submit" value="SUBSCRIBE">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="widget-12 text-center pushtop-30" style="height:50px">
            <div class="container">
                    
                <div class="buttons pushtop-5">
                    <a href="#" class="button-link-1">GET STARTED <i class="fa fa-caret-right"></i></a>
                    <a href="#" class="button-link-1">LOGIN NOW</a>
                </div>
            </div>
        </div>
        <div class="widget-13 pushtop-30">
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

        {{-- <div class="widget-12 text-center pushtop-30">
            <div class="container">
                <p class="pretitle">GET STARTED TODAY</p>
                <h3>We offer you a bunch of services</h3>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <p>
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit 
                            esse molestie consequat, vel illum dolore eu feugiat nulla facilisis 
                            at vero eros et accumsan et iusto odio dignissim qui blandit praesent 
                            luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
                        </p>
                    </div>
                </div>
                <div class="buttons pushtop-50">
                    <a href="#" class="button-link-1">GET STARTED <i class="fa fa-caret-right"></i></a>
                    <a href="#" class="button-link-1">LOGIN NOW</a>
                </div>
            </div>
        </div> --}}

    </main>

@endsection