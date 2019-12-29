@extends('layouts.app')

@section('title')
All Project Years
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            List of Project Years
            &nbsp;
            <a href="{{ route('admin-project-years-create') }}" class="badge badge-success">
                Add Project Year
            </a>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Year</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($projectYears as $projectYear)
                        <tr>
                            <td>{{ $projectYear->year }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <a href="#" class="btn btn-danger">Archive</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer justify-content-center">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-2">
                    
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
    </div>
</div>
@endsection