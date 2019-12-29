@extends('layouts.app')

@section('title')
All Projects
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            List of Projects
            &nbsp;
            <a href="{{ route('admin-projects-create') }}" class="badge badge-success">
                Add Project
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
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Project Name</td>
                        <td>1/1/2020</td>
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="#" class="btn btn-danger">Archive</a>
                            <a href="#" class="btn btn-secondary">Hide</a>
                            <a href="#" class="btn btn-success">Show</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection