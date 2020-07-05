@extends('layouts.artree') @section('title') Welcome @endsection

<style>
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
</style>

@section('body')
<div class="container-fluid">
    <!--<div class="hero">
            <img src="{{ $featuredProject->featured ?? asset('images/hero.png') }}" class="featImg">
            <div class="overlay"></div>
            <div class="container">
                <div class="desc">
                    <span class="titleHead">{{ $featuredProject->name ?? 'No featured projects yet.' }}</span><br>
                    <span class="tagHead">
                        @if($featuredProject->event ?? false)
                            {{ Carbon\Carbon::parse($featuredProject->events->start_date ?? Carbon\Carbon::now())->format('l jS \\of F Y') }} - {{ Carbon\Carbon::parse($featuredProject->events->end_date)->format('l jS \\of F Y') }}
                            : {{ $featuredProject->events->location ?? 'No location' }}
                        @else
                            {{ Carbon\Carbon::parse($featuredProject->project_date ?? Carbon\Carbon::now())->format('l jS \\of F Y') }}
                            : {{ $featuredProject->location ?? 'No location'}}
                        @endif
                    </span>
                </div>
            </div>
        </div> -->

    <div id="demo" class="carousel slide arteeSlide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="https://www.w3schools.com/bootstrap4/ny.jpg"
                    alt="Featured Project"
                />
                <div class="carousel-caption">
                    <h1>Los Angeles</h1>
                    <p>Check out our awesome project</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="https://www.w3schools.com/bootstrap4/chicago.jpg"
                    alt="Featured Project"
                />
                <div class="carousel-caption">
                    <h1>Chicago</h1>
                    <p>Check out our awesome project</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="https://www.w3schools.com/bootstrap4/la.jpg"
                    alt="Featured Image"
                />
                <div class="carousel-caption">
                    <h1>New York</h1>
                    <p>Check out our awesome project</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>

<div class="container">
    <br /><br />
    <div class="news">
        <h1>News and Updates</h1>
        <br />
        <div class="row">
            @if($latestEvent != null)
            <div class="col-md-8">
                <div class="card" style="height: 100%;">
                    <div class="row h-100">
                        <div class="col-md-6 my-auto">
                            <img
                                src="{{ $latestEvent->events->photo ?? asset('images/feat.jpeg') }}"
                                class="eventImg"
                            />
                        </div>
                        <div class="col-md-6 my-auto">
                            <div style="padding: 40px;">
                                <strong>{{ $latestEvent->name }}</strong>
                                <br /><br />
                                <i class="fal fa-calendar"></i>&nbsp;
                                {{ Carbon\Carbon::parse($latestEvent->events->start_date)->format('l jS \\of F Y')










                                }}<br />
                                <i class="fal fa-clock"></i>&nbsp;
                                {{ Carbon\Carbon::parse($latestEvent->events->start_time)->format('h:i A') }}
                                -
                                {{ Carbon\Carbon::parse($latestEvent->events->end_time)->format('h:i A') }}
                                <br />
                                <i class="fal fa-map-marker"></i>&nbsp;
                                {{ $latestEvent->events->location }} <br />
                                {{-- <i class="fal fa-ticket"></i>&nbsp;
                                {{ $latestEvent->events->entry_fee }} <br />
                                --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif @foreach($projects as $project)
            <div class="col-md-4">
                <div class="card" style="height: 100%;">
                    <img
                        class="card-img-top cardImg"
                        src="{{ $project->featured ?? asset('images/eye.png') }}"
                        alt="Card image"
                    />
                    <div class="card-body">
                        <p class="card-title">
                            <i class="fal fa-calendar"></i>&nbsp;
                            {{ Carbon\Carbon::parse($project->project_date)->format('l jS \\of F Y') }}
                        </p>
                        <p class="card-text">
                            <strong>{{ $project->name }}</strong> <br />
                            ...
                            {{ substr(strip_tags($project->body), 10, 150) }}
                            ...
                        </p>
                        <a
                            href="{{ route('projects-read', ['year' => $project->projectYear->year, 'project' => $project]) }}"
                            class="btn btn-artee"
                            >Read More</a
                        >
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <br /><br />
    <div class="news">
        <h1>Social Feeds</h1>
        <br />
        <div class="row">
            <div class="col-md-6">
                <h5 style="float: left;">Instagram</h5>
                <a
                    class="btn btn-artee"
                    href="{{ $settings->instagram ?? '#' }}"
                    style="float: right;"
                    >Follow</a
                ><br /><br />
                <!-- SnapWidget -->
                <script src="https://snapwidget.com/js/snapwidget.js"></script>
                <iframe
                    src="https://snapwidget.com/embed/776121"
                    class="snapwidget-widget"
                    allowtransparency="true"
                    frameborder="0"
                    scrolling="no"
                    style="border: none; overflow: hidden; width: 100%;"
                ></iframe>
                <br />
            </div>
            <div class="col-md-6">
                <h5 style="float: left;">Facebook</h5>
                <a
                    class="btn btn-artee"
                    href="{{ $settings->facebook ?? '#' }}"
                    style="float: right;"
                    >Like</a
                ><br /><br />
                <div class="text-center">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FArtree-Nepal-295759690592034%2F&tabs=timeline&width=340&height=540&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=138713336895364"
                        width="340"
                        height="540"
                        style="border: none; overflow: hidden;"
                        scrolling="no"
                        frameborder="0"
                        allowTransparency="true"
                        allow="encrypted-media"
                    ></iframe>
                </div>
                <br />
            </div>
        </div>
    </div>
    @include('layouts.partials.contact-us')
</div>
@endsection
