 @include('web.style.header')
 <!-- Carousel Start -->
 <div class="container-fluid p-0 pb-5">
    <div class="owl-carousel header-carousel position-relative mb-5">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('web/assets/img/img4.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Logistics</span> Solution</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands. Customer requirements will be met with the highest levels of quality appropriate to each market segment served. Safety is the first consideration in all operations.</p>
                            <a href="{{route('webs.about')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('web/assets/img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Transport & Logistics Solution</h5>
                            <h1 class="display-3 text-white animated slideInDown mb-4">#1 Place For Your <span class="text-primary">Transport</span> Solution</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-2">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands. Customer requirements will be met with the highest levels of quality appropriate to each market segment served. Safety is the first consideration in all operations.</p>
                            <a href="{{route('webs.about')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container about py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('web/assets/img/about.jpg')}}" style="object-fit: cover;" alt="">
                </div>
            </div>
            <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="text-secondary text-uppercase mb-3">About Us</h6>
                <h1 class="mb-5">Quick Transport and Logistics Solutions</h1>
                <p class="mb-5">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands. Customer requirements will be met with the highest levels of quality appropriate to each market segment served. Safety is the first consideration in all operations.</p>
                <div class="row g-4 mb-5">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                        <h5>Global Coverage</h5>
                        <p class="m-0">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands.</p>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                        <h5>On Time Delivery</h5>
                        <p class="m-0">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands.</p>
                    </div>
                </div>
                <a href="{{route('webs.about')}}" class="btn btn-primary py-3 px-5">Explore More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Fact Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Some Facts</h6>
                <h1 class="mb-5">#1 Place To Manage All Of Your Shipments</h1>
                <p class="mb-5">We offers logistic management services and supply chain </p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Call for any query!</h6>
                        <h3 class="text-primary m-0">+02-22678640 / 1</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6">
                        <div class="bg-primary p-4 mb-4 wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-users fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Happy Clients</p>
                        </div>
                        <div class="bg-secondary p-4 wow fadeIn" data-wow-delay="0.5s">
                            <i class="fa fa-ship fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Complete Shipments</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-success p-4 wow fadeIn" data-wow-delay="0.7s">
                            <i class="fa fa-star fa-2x text-white mb-3"></i>
                            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                            <p class="text-white mb-0">Customer Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-secondary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            @forelse ( $Services as $service )
                
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset($service->image)}}" alt="">
                    </div>
                    <h4 class="mb-3">{{$service->services_name}}</h4>
                    <p>{{$service->Description}}</p>
                    <a class="btn-slide mt-2" href="#"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="container-fluid overflow-hidden py-5 px-lg-0">
    <div class="container feature py-5 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-lg-6 feature-text wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Our Features</h6>
                <h1 class="mb-5">We Are Trusted Logistics Company </h1>
                <div class="d-flex mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <i class="fa fa-globe text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>Worldwide Service</h5>
                        <p class="mb-0">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands.</p>
                    </div>
                </div>
                <div class="d-flex mb-5 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-shipping-fast text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>On Time Delivery</h5>
                        <p class="mb-0">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands.</p>
                    </div>
                </div>
                <div class="d-flex mb-0 wow fadeInUp" data-wow-delay="0.7s">
                    <i class="fa fa-headphones text-primary fa-3x flex-shrink-0"></i>
                    <div class="ms-4">
                        <h5>24/7 Telephone Support</h5>
                        <p class="mb-0">We offers logistic management services and provides high value-added transportation and logistics services. LMEX will continuously improve logistics services to maximize customer satisfaction and meet changes in customer demands.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-0 wow fadeInRight" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="position-absolute img-fluid w-100 h-100" src="{{asset('web/assets/img/feature.jpg')}}" style="object-fit: cover;" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Quote Start -->
<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase mb-3">Get A Quote</h6>
                <h1 class="mb-5">Request a suitable quote!!</h1>
                <p class="mb-5">We offers a host of logistic management services and supply chain solutions.</p>
                <div class="d-flex align-items-center">
                    <i class="fa fa-headphones fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Call for any query!</h6>
                        <h3 class="text-primary m-0">+02-22678640 / 1</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Freight</option>
                                    <option value="1">Freight 1</option>
                                    <option value="2">Freight 2</option>
                                    <option value="3">Freight 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="text-center">
            <h6 class="text-secondary text-uppercase">Testimonial</h6>
            <h1 class="mb-0">Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('web/assets/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Karim Donato</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">We intend to thank LMEX Egypt team for their unprecedented cooperation during the process of exporting “A VERY LARGE GENERATOR 8 MEGAWATT” to Spain for many days - not just during working days, but also during their holidays too -the team faced many difficulties in this process and they were able to solve it so cleverly demonstrating their expertise.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('web/assets/img/testimonial-2.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Mohamed Saeed</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">We are very happy with  high level of service in LMEX Egypt team we receive. And the best thing is that we find fast response level to problems and very impressive problem solving ability.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('web/assets/img/testimonial-3.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Esmaeel Abd Elwhab</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">We would like to thank everyone in LMEX Egypt team especially during the past period and we know that it was so hard due to the trucker’s sit-in & bad weather and we appreciate your exceptional performance for providing everything on time regarding this Period. Thank you Heroes.</p>
            </div>
            <div class="testimonial-item p-4 my-5">
                <i class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                <div class="d-flex align-items-end mb-4">
                    <img class="img-fluid flex-shrink-0" src="{{asset('web/assets/img/face1.jpg')}}" style="width: 80px; height: 80px;">
                    <div class="ms-4">
                        <h5 class="mb-1">Maged Thabet</h5>
                        <p class="m-0">Profession</p>
                    </div>
                </div>
                <p class="mb-0">We consider LMEX Egypt to be almost our partners. They handle all our work from import to export. Their troubleshooting and response to problems is really fast and we can rely on them.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Address</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>22 Aimtidad Sayed Zakaria St, 1st floor - flat 4,</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+02-22678640/1</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@lmex.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href="https://twitter.com/lmexllc"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/lmexllc"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/company/lmexllc"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <a class="btn btn-link" href="#">Air Freight</a>
                <a class="btn btn-link" href="#">Sea Freight</a>
                <a class="btn btn-link" href="#">Road Freight</a>
                <a class="btn btn-link" href="#">Logistic Solutions</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{route('webs.about')}}">About Us</a>
                <a class="btn btn-link" href="{{route('webs.contact')}}">Contact Us</a>
                <a class="btn btn-link" href="{{route('webs.services')}}">Our Services</a>
                <a class="btn btn-link" href="{{route('webs.index')}}">Terms & Condition</a>
                <a class="btn btn-link" href="{{route('webs.index')}}">Support</a>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                    <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <p class="text-center">© Copyright ©2024 All rights reserved LMEX.</p>
                </div>
        
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('web/assets/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('web/assets/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('web/assets/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('web/assets/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('web/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('web/assets/js/main.js')}}"></script>
</body>

</html>