@extends('frontend.layout.layout')

@section('content')
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Blog</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if (isset($posts))
        <div class="blog-area ptb-100">
            <div class="container">
                <div class="row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-sm-6">
                            <a href="{{ route('blogSingleViewPage', base64_encode($post->id)) }}">
                                <div class="blog-card">
                                    <a href="{{ route('blogSingleViewPage', base64_encode($post->id)) }}">
                                        <img src="{{ url('storage/' . $post->image) }}" alt="Image">
                                    </a>
                                    <div class="blog-card-text">
                                        <h3><a
                                                href="{{ route('blogSingleViewPage', base64_encode($post->id)) }}">{!! $post->title !!}</a>
                                        </h3>
                                        <ul>
                                            <li>
                                                <i class="las la-calendar"></i>
                                                {{ date('d-m-Y', strtotime($post->created_at)) }}
                                            </li>
                                            @if (isset($post->category))
                                                <li>
                                                    <i class="las la-calendar"></i>
                                                    {{ $post->category }}
                                                </li>
                                            @endif
                                        </ul>
                                        <p>{!! Str::limit($post->description, 160) !!}</p>
                                        <a href="{{ route('blogSingleViewPage', base64_encode($post->id)) }}"
                                            class="read-more">
                                            Read More <i class="las la-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-lg-12 col-md-12">
                        <ul class="pagination">
                            {{ $posts->links('pagination::bootstrap-5') }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif






@endsection
