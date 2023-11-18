@extends('frontend.layout.layout')



@section('content')
    @if (isset($banner))
        <!-- Atorn Banner Area -->
        <div class="atron-banner-area"
            style="background-image: url('http://127.0.0.1:8000/storage/banners/November2023/mBfFDeRWe3a0Pzgbluym.jpg')">
            <div class="container">
                <div class="banner contant">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="banner-img">
                                <img src="{{ url('storage/' . $banner->foreground_image) }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="banner-text">
                                <h1>{!! $banner->title !!}</h1>
                                <p>{!! $banner->description !!}</p>
                                <div class="banner-btn">
                                    <a href="#" class="default-btn-two">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Atorn Banner Area -->
    @endif

    <!-- Overview Area -->
    @if (isset($overviews))
        <div class="law-card-area pt-100 pb-70">
            <div class="container">
                <div class="card-contant">
                    <div class="row no-gutters">
                        @foreach ($overviews as $overview)
                            <div class="col-lg-3 bor-right col-sm-6" style="margin-bottom: 16px">
                                <div class="low-card">
                                    <h3>{!! $overview->title !!}</h3>
                                    <i class="{!! $overview->icon !!}"></i>
                                    <p>{!! $overview->short_desc !!}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Ends Overview Area -->

    <!-- service Area -->
    @if (isset($services))
        <div class="service-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Our Services</span>
                    <h2>We Are Providing <span>Top Services</span> With Excellent Performance</h2>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-sm-6">
                            <div class="service-card">
                                <a href="service-details.html">
                                    <img src="{{ url('storage/' . $service->image) }}" alt="Image">
                                </a>
                                <div class="service-text">
                                    <i class="las la-city"></i>
                                    <h3><a href="service-details.html">{!! $service->title !!}</a></h3>
                                    <p>{!! Str::limit($service->description, 160, '..') !!}</p>
                                    <span><a href="" style="color: red">Read More...</a></span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    @endif
    <!-- End service Area -->

    {{-- Intro Videos --}}
    @if (isset($intros))
        <div class="right-way-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-contant">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <div class="video-box">
                                        <a href="{!! $intros->video_link !!}" class="video-btn popup-youtube">
                                            <i class="las la-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 right-way">
                        <div class="right-way-text">
                            <div class="section-title">
                                <h2>{!! $intros->title !!}</h2>
                                <p>{!! $intros->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Intro Videos End --}}

    {{-- Fee --}}
    @if (isset($fees))
        <div class="about-area ptb-100" id="fees">
            <div class="container">
                <div class="section-title">
                    <span>Fees</span>
                    <h2>{!! $fees->title !!}</h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-image">
                            <img src="{{ url('storage/' . $fees->image) }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-text">
                            <div class="section-title">
                                <p>{!! $fees->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- Fee End --}}

    {{-- Testimonial --}}
    @if (isset($testimonials))
        <div class="testimonials-area ptb-100">
            <div class="container">
                <div class="section-title text-center">
                    <span>Testimonials</span>
                    <h2>Our Clients Love Us &amp; We Got <span> 4.5 Star</span> Out of 5 Star</h2>
                </div>
                <div class="testimonials-slider owl-carousel owl-theme owl-loaded owl-drag">

                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach ($testimonials as $testi)
                                <div class="owl-item cloned" style="width: 558px; margin-right: 30px;">
                                    <div class="testimonials-slider-item feed-back">
                                        <div class="img-text">
                                            <p>{!! $testi->short_desc !!}</p>
                                            <div class="rating">
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                                <i class="las la-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endif
    {{-- Testimonial End --}}

    {{-- Posts  --}}
    @if (isset($posts))
        <div class="blog-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>Latest Blog</span>
                    <h2>Top <span>Blog</span> Related To Law, Cases &amp; Consulting</h2>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-sm-6">
                            <a href="#">
                                <div class="blog-card">
                                    <a href="blog-details.html">
                                        <img src="{{ url('storage/' . $post->image) }}" alt="Image">
                                    </a>
                                    <div class="blog-card-text">
                                        <h3><a href="blog-details.html">{!! $post->title !!}</a></h3>
                                        <ul>
                                            <li>
                                                <i class="las la-calendar"></i>
                                                {{ date('d-m-Y', strtotime($post->created_at)) }}
                                            </li>
                                        </ul>
                                        <p>{!! Str::limit($post->description, 160) !!}</p>
                                        <a href="blog-details.html" class="read-more">
                                            Read More <i class="las la-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>

                            <div class="banner-btn">
                                <a href="#" class="default-btn-two" style="background: #330663">View All Posts</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    {{-- End Posts --}}


    {{-- Contact Form --}}
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-text">
                        <div class="section-title">
                            <h2>Contact Us Today, Get In Touch With Expert</h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                                and demoralized by the charms of pleasure of the moment, so blinded by desire hat they
                                cannot foresee the pain and trouble.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-card">
                                    <span>Phone Number</span>
                                    <h3><a href="tel:+0123456987">+0123 456 987</a></h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-card">
                                    <span>Our Social Link</span>
                                    <ul>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <span>Contact Form</span>
                        <h2>Contact With Us</h2>
                    </div>
                    <div class="contact-form">
                        <form id="form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            required="" placeholder="Full name">
                                        <i class="las la-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email"
                                            required="" placeholder="Email address">
                                        <i class="las la-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            required="" placeholder="Phone No">
                                        <i class="las la-phone"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="description" id="description" class="form-control" cols="30" rows="6" required=""
                                            placeholder="Write your message..."></textarea>
                                        <i class="las la-sms"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn-one">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Contact Form End --}}

    @push('js')
    @endpush



@endsection
