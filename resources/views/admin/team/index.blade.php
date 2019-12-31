@extends('layouts.app')

@section('title')
    Team
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Team Member 
            &nbsp; 
            <a href="{{ route('admin-team-create') }}" class="badge badge-success">
                Add new Team member
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
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>
                                    <img src="{{ asset('images/eye.png') }}" style="object-fit:cover;" width="50" height="50">
                                </td>
                                <td>
                                    Prayush Bijukchhe
                                </td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="" class="btn btn-secondary">Hide</a>
                                    <a href="" class="btn btn-success">Publish</a>
                                </td>
                            </tr>
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
