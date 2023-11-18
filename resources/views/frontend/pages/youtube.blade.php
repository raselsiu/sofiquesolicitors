@extends('frontend.layout.layout')

@push('css')
    <style>
        /* taking care of responsive layout */
        .gallery {
            display: flex;
            flex-wrap: wrap;
            margin: 0.5rem;
        }

        .single-video {
            width: 10rem;
            flex-grow: 1;
            margin: 0.5rem;
        }

        /* taking care of the video aspect-ratio */
        figure {
            position: relative;
            padding: 0 0 56.25% 0;
        }

        figure iframe {
            position: absolute;
            width: 100%;
            height: 100%;
        }
    </style>
@endpush

@section('content')
    <div class="page-banner bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Advice On Youtube</h2>
                        <ul>
                            <li><a href="index.html">Home <i class="las la-angle-right"></i></a></li>
                            <li>Advice On Youtube</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="youtube-videos ptb-100">
        <div class="container">
            <div class="row">
                @foreach ($yts as $yt)
                    <div class="col-lg-4 col-md-4">
                        <div class="gallery">
                            <div class="single-video">
                                <figure>
                                    {!! $yt->links !!}
                                </figure>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


@push('js')
@endpush
