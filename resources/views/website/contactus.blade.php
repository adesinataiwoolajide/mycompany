@extends("design.header")
    @section("content")
    
    <?php 
        $web_name = "Glorious Empire Tech"; 
    ?>
    <main>

        <div class="container">
            <div class="widget contact-widget clearfix">							
                <p class="pretitle text-center">GET IN TOUCH WITH US</p>
                <h3 class="text-center">Get in touch with us</h3>
                <div class="row pushtop-80">
                    <div class="col-md-3">
                        <label class="required-input">NAME</label>
                        <div class="input-container">
                            <input type="text" placeholder="your name" required/>
                            <div class="input-bottom-line"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="required-input">E-MAIL ADDRESS</label>
                        <div class="input-container">
                            <input type="email" placeholder="email@mail.com" required/>
                            <div class="input-bottom-line"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>PHONE NUMBER</label>
                        <div class="input-container">
                            <input type="text" placeholder="+49 123 456 789" required/>
                            <div class="input-bottom-line"></div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="required-input">SUBJECT</label>
                        <div class="input-container">
                            <input type="text" placeholder="subject" required/>
                            <div class="input-bottom-line"></div>
                        </div>
                    </div>
                </div>
                <label class="required-input">MESSAGE</label>
                <div class="input-container">
                    <textarea placeholder="type in your message"></textarea>
                    <div class="input-bottom-line"></div>
                </div>
                <input type="submit" value="SUBMIT" class="button-link-1 pull-right">
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