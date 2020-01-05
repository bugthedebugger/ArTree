@extends('layouts.artree')

@section('title')
Home
@endsection

@section('body')
    <div class="container-fluid">
        <div class="hero">
            <img src="{{ $featuredProject->featured ?? asset('images/hero.png') }}" class="featImg">
            <div class="overlay"></div>
            <div class="container">
                <div class="desc">
                    <span class="titleHead">{{ $featuredProject->name ?? 'No featured projects yet.' }}</span><br>
                    <span class="tagHead">Some tagline will go here!</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <br/><br/>
        <div class="news">
            <h1>News and Updates</h1><br>
            <div class="row">
                @if($latestEvent != null) 
                    <div class="col-md-8">
                        <div class="card" style="height:100%;">
                            <div class="row h-100">
                                <div class="col-md-6 my-auto">
                                    <img src="{{ $latestEvent->featured ?? asset('images/feat.jpeg') }}" class="eventImg">  
                                </div>
                                <div class="col-md-6 my-auto">
                                    <div style="padding:40px;">
                                        <strong>{{ $latestEvent->name }}</strong> <br><br>
                                        <i class="fal fa-calendar"></i>&nbsp; {{ Carbon\Carbon::parse($latestEvent->events->start_date)->format('l jS \\of F Y') }}<br>
                                        <i class="fal fa-clock"></i>&nbsp; {{ Carbon\Carbon::parse($latestEvent->events->start_time)->format('h:i A') }} - {{ Carbon\Carbon::parse($latestEvent->events->end_time)->format('h:i A') }} <br>
                                        <i class="fal fa-map-marker"></i>&nbsp; {{ $latestEvent->events->location }} <br>
                                        {{-- <i class="fal fa-ticket"></i>&nbsp; {{ $latestEvent->events->entry_fee }} <br> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @foreach($projects as $project)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top cardImg" src="{{ $project->featured ?? asset('images/eye.png') }}" alt="Card image">
                            <div class="card-body">
                                <p class="card-title">
                                    <i class="fal fa-calendar"></i>&nbsp; 
                                    {{ Carbon\Carbon::parse($project->project_date)->format('l jS \\of F Y') }}
                                </p>
                                <p class="card-text">
                                    <strong>{{ $project->name }}</strong> <br>
                                    ... {{ substr(strip_tags($project->body), 10, 150) }} ...
                                </p>
                                <a href="{{ route('projects-read', ['year' => $project->projectYear->year, 'project' => $project]) }}" class="btn btn-artee">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <br/><br/>
        <div class="news">
            <h1>Social Feeds</h1><br>
            <div class="row">
                <div class="col-md-6">
                    <h5 style="float:left;">Instagram</h5>
                    <a class="btn btn-artee" href="{{ $settings->instagram ?? '#' }}" style="float:right">Follow</a><br><br>
                    <!-- SnapWidget -->
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/776121" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
                    <br>
                </div>
                <div class="col-md-6">
                    <h5 style="float:left;">Facebook</h5>
                    <a class="btn btn-artee" href="{{ $settings->facebook ?? '#' }}" style="float:right">Like</a><br><br>
                    <div class="text-center">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FArtree-Nepal-295759690592034%2F&tabs=timeline&width=340&height=540&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=138713336895364" width="340" height="540" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        @include('layouts.partials.contact-us')
    </div>
@endsection