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


@endsection
