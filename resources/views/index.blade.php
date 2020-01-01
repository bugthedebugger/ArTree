@extends('layouts.artree')

@section('title')
Home
@endsection

@section('body')
    <div class="container-fluid">
        <div class="hero">
            <img src="{{ $featuredProject->featured ?? asset('images/hero.png') }}" class="featImg">
            <div class="container">
                <div class="desc">
                    <span class="titleHead">{{ $featuredProject->name ?? 'No featured projects yet.' }}</span><br>
                    {{-- <span class="tagHead">Opposite Dreams - The Politics of Nepal</span> --}}
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
                                        <i class="fal fa-ticket"></i>&nbsp; {{ $latestEvent->events->entry_fee }} <br>
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
                    <button class="btn btn-artee" style="float:right">Follow</button><br><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                        <div class="col-md-4">
                            <div class="grey"></div>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-6">
                    <h5 style="float:left;">Youtube</h5>
                    <button class="btn btn-artee" style="float:right">Follow</button><br><br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="grey" style="height:332px"></div>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="grey" style="height:150px"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="grey" style="height:150px"></div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
        @include('layouts.partials.contact-us')
    </div>
@endsection