@extends('layouts.artree')

@section('body')


<div class="container">
    <div class="page">
        <div class="row">
            <div class="col-md-8">
                <div class="aboutHead">
                    <h1>About us</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aboutTagline">
                    <i class="fas fa-quote-left"></i>
                    <p>
                        {{ $settings->tagline ?? 'No taglines found' }} 
                    </p>
                </div>
            </div>
        </div>
        <br>
        <p class="text-justify">
            {!! nl2br($settings->about) ?? 'About us is empty ...' !!}
        </p>
        <br><br>
        <center>
            <h1>Meet the Team</h1>
        </center><br>
        <div class="row">
            <div class="col-md-4">
                <div class="team">
                    <center>
                        <img src="images/01teem.png" class="teamPic"><br><br>
                        <h4>Hitman Gurung</h4>
                        <span class="socialIcons">
                            <i class="fab fa-facebook"></i>&nbsp;
                            <i class="fab fa-twitter"></i>&nbsp;
                            <i class="fab fa-instagram"></i>&nbsp;
                        </span><br>
                        <a href="#" class="bioLink">View Biography</a>
                    </center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <center>
                        <img src="images/02teem.png" class="teamPic"><br><br>
                        <h4>Sheelasha Raj Bhandari</h4>
                        <span class="socialIcons">
                            <i class="fab fa-facebook"></i>&nbsp;
                            <i class="fab fa-twitter"></i>&nbsp;
                            <i class="fab fa-instagram"></i>&nbsp;
                        </span><br>
                        <a href="#" class="bioLink">View Biography</a>
                    </center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <center>
                        <img src="images/03teem.png" class="teamPic"><br><br>
                        <h4>Mekh Limbu</h4>
                        <span class="socialIcons">
                            <i class="fab fa-facebook"></i>&nbsp;
                            <i class="fab fa-twitter"></i>&nbsp;
                            <i class="fab fa-instagram"></i>&nbsp;
                        </span><br>
                        <a href="#" class="bioLink">View Biography</a>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team">
                    <center>
                        <img src="images/04teem.png" class="teamPic"><br><br>
                        <h4>Subas Tamang</h4>
                        <span class="socialIcons">
                            <i class="fab fa-facebook"></i>&nbsp;
                            <i class="fab fa-twitter"></i>&nbsp;
                            <i class="fab fa-instagram"></i>&nbsp;
                        </span><br>
                        <a href="#" class="bioLink">View Biography</a>
                    </center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <center>
                        <img src="images/05teem.png" class="teamPic"><br><br>
                        <h4>Lavkant Chaudhary</h4>
                        <span class="socialIcons">
                            <i class="fab fa-facebook"></i>&nbsp;
                            <i class="fab fa-twitter"></i>&nbsp;
                            <i class="fab fa-instagram"></i>&nbsp;
                        </span><br>
                        <a href="#" class="bioLink">View Biography</a>
                    </center>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team">
                    <center>
                        <img src="images/06teem.png" class="teamPic"><br><br>
                        <h4>Bikash Shrestha</h4>
                        <span class="socialIcons">
                            <i class="fab fa-facebook"></i>&nbsp;
                            <i class="fab fa-twitter"></i>&nbsp;
                            <i class="fab fa-instagram"></i>&nbsp;
                        </span><br>
                        <a href="#" class="bioLink">View Biography</a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection