@extends('layouts.artree')

@section('title')
{{ $member->name }}
@endsection

@section('body')
<div class="container">
    <div class="page">
        <div class="row">
            <div class="col-md-3">
                <center>
                    <img src="{{ $member->photo }}" class="teamPic rounded-circle" alt=""><br><br>
                    <span class="socialIcons">
                        <a href="{{ $member->facebook ?? '#' }}"><i class="fab fa-facebook"></i></a>&nbsp;
                        <a href="{{ $member->twitter ?? '#' }}"><i class="fab fa-twitter"></i></a>&nbsp;
                        <a href="{{ $member->instagram ?? '#' }}"><i class="fab fa-instagram"></i></a>&nbsp;
                    </span><br>
                </center>
            </div>
            <div class="col-md-9">
                <h1>{{ $member->name }}</h1>
                <br>
                <p class="bioText">
                        {!! nl2br($member->bio ?? 'About us is empty ...') !!}
                </p>
            </div>
        </div>
        <br><br>
    </div>
</div>

<div class="container-fluid">
    <div class="teamOthers">
        <div class="container">
            <h1>Learn More About Others</h1><br>
            <div class="row">
                @foreach($team as $m)
                    <div class="col-md-3">
                        <Center>
                            <img src="{{ $m->photo }}" class="teamPic"><br><br>
                            <h6>{{ $m->name }}</h6>
                            <a href="{{ route('bio', $m) }}" class="bioLink">View Biography</a>
                        </Center>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection