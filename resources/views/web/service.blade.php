@include('web.style.header')
   <!-- Page Header Start -->
   <div class="container-fluid page-header py-5" style="margin-bottom: 6rem;">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


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
                <a class="btn btn-link" href="">Air Freight</a>
                <a class="btn btn-link" href="">Sea Freight</a>
                <a class="btn btn-link" href="">Road Freight</a>
                <a class="btn btn-link" href="">Logistic Solutions</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Quick Links</h4>
                <a class="btn btn-link" href="{{route('webs.about')}}">About Us</a>
                <a class="btn btn-link" href="{{route('webs.contact')}}">Contact Us</a>
                <a class="btn btn-link" href="{{route('webs.services')}}">Our Services</a>
                <a class="btn btn-link" href="{{route('webs.index')}}">Terms & Condition</a>
                <a class="btn btn-link" href="{{route('webs.index')}}">Support</a>
            </div>

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