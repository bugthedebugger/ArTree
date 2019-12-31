@extends('layouts.artree')

@section('body')

<div class="container">
    <div class="page">
        <h1>Projects from {{ $year->year }}</h1><br>
        <div class="row">
            @foreach($year->projects as $project)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ $project->featured }}" alt="Card image">
                        <div class="card-body">
                            <p class="card-title">
                                <i class="fal fa-calendar"></i>&nbsp; 
                                {{ Carbon\Carbon::parse($project->project_date)->format('l jS \\of F Y') }}
                            </p>
                            <p class="card-text">
                                <strong>{{ $project->name }}</strong> <br>
                                ... {{ substr(strip_tags($project->body), 10, 200) }} ...
                            </p>
                            <a href="{{ route('projects-read', ['year' => $year->year, 'project' => $project]) }}" class="btn btn-artee">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <br><br>
    </div>
</div>

@endsection