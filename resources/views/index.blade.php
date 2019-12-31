@extends('layouts.artree')

@section('body')
    <div class="container-fluid">
        <div class="hero">
            <div class="container">
                <div class="desc">
                    <span class="titleHead">{{ $featuredProject->name ?? 'No featured projects yet.' }}</span><br>
                    {{-- <span class="tagHead">Opposite Dreams - The Politics of Nepal</span> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="news">
            <h1>News and Updates</h1><br>
            <div class="row">
                <div class="col-md-8">
                    <div class="card" style="height:100%;">
                        <div class="row h-100">
                            <div class="col-md-6 my-auto">
                                <img src="images/feat.jpeg" alt="" style="width:100%">  
                            </div>
                            <div class="col-md-6 my-auto">
                                <div style="padding:40px;">
                                    <strong>Opposite Dreams - the Politics of Nepal</strong> <br><br>
                                    <i class="fal fa-calendar"></i>&nbsp; 27th Oct 2019 <br>
                                    <i class="fal fa-clock"></i>&nbsp; 11AM - 7PM <br>
                                    <i class="fal fa-map-marker"></i>&nbsp; Samarpan Marg, Tripureshore <br>
                                    <i class="fal fa-ticket"></i>&nbsp; FREE Entry <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/eye.png" alt="Card image">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fal fa-calendar"></i>&nbsp; 11th Sep 2019, Monday
                            </p>
                            <p class="card-text">
                                <strong>Some cool Title</strong> <br>
                                ... and African countries. According to the International Organization of Migration
                                (IOM) for the only thing that matters is the fact that...
                            </p>
                            <a href="#" class="btn btn-artee">Read More</a>
                        </div>
                    </div>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/eye2.png" alt="Card image">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fal fa-calendar"></i>&nbsp; 11th Sep 2019, Monday
                            </p>
                            <p class="card-text">
                                <strong>Some cool Title</strong> <br>
                                ... and African countries. According to the International Organization of Migration
                                (IOM) for the only thing that matters is the fact that...
                            </p>
                            <a href="#" class="btn btn-artee">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/eye.png" alt="Card image">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fal fa-calendar"></i>&nbsp; 11th Sep 2019, Monday
                            </p>
                            <p class="card-text">
                                 <strong>Some cool Title</strong> <br>
                                ... and African countries. According to the International Organization of Migration
                                (IOM) for the only thing that matters is the fact that...
                            </p>
                            <a href="#" class="btn btn-artee">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="images/eye2.png" alt="Card image">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fal fa-calendar"></i>&nbsp; 11th Sep 2019, Monday
                            </p>
                            <p class="card-text">
                                <strong>Some cool Title</strong> <br>
                                ... and African countries. According to the International Organization of Migration
                                (IOM) for the only thing that matters is the fact that...
                            </p>
                            <a href="#" class="btn btn-artee">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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