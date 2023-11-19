@extends('frontend.layout.layout')

@section('content')
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Blog Details</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Blog Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="services-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12">
                    <div class="services-details">
                        <div class="img">
                            <img src="{{ url('storage/' . $post->image) }}" alt="Image">
                        </div>
                        <div class="services-details-content">
                            <h3>{!! $post->title !!}</h3>
                            <ul class="blog-list">
                                <li>
                                    <i class="las la-calendar"></i>
                                    {{ date('d-m-Y', strtotime($post->created_at)) }}
                                </li>

                            </ul>
                            <p>{!! $post->description !!}</p>
                        </div>

                        <div class="article-footer">
                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li><a href="#" class="facebook" target="_blank"><i
                                                class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" class="twitter" target="_blank"><i class="lab la-twitter"></i></a>
                                    </li>
                                    <li><a href="#" class="linkedin" target="_blank"><i
                                                class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#" class="instagram" target="_blank"><i
                                                class="lab la-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12">
                    <div class="side-bar">
                        <div class="side-bar-box search-box">
                            <form method="GET" action="{{ route('searchPosts') }}">
                                @csrf
                                <input type="text" class="form-control" name="search" id="search-input"
                                    placeholder="Search">
                                <button type="submit"><i class="las la-search"></i></button>
                            </form>
                        </div>
                        <div class="side-bar-box recent-post">
                            <h3 class="title">Recent Post</h3>
                            @if (isset($recentPost))
                                @foreach ($recentPost as $recent)
                                    <div class="single-recent-post">
                                        <div class="recent-post-img">
                                            <a href="{{ route('blogSingleViewPage', base64_encode($recent->id)) }}"><img
                                                    src="{{ url('storage/' . $recent->image) }}" alt="Image"></a>
                                        </div>
                                        <div class="recent-post-content">
                                            <h3><a
                                                    href="{{ route('blogSingleViewPage', base64_encode($recent->id)) }}">{!! $recent->title !!}</a>
                                            </h3>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('blogSingleViewPage', base64_encode($recent->id)) }}">
                                                        <i class="fa fa-calendar"></i>
                                                        {{ date('d-m-Y', strtotime($recent->created_at)) }}
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <div class="side-bar-box categories-box">
                            <h3 class="title">Categories</h3>
                            @if (isset($categoryList))
                                <ul>
                                    @foreach ($categoryList as $list)
                                        <li><a href="{{ route('categoryWiseSingleView', $list->id) }}"><i
                                                    class="las la-angle-double-right"></i>{{ $list->category }}</a></li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
