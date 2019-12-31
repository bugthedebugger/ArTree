@extends('layouts.app')

@section('title')
Add Team Member
@endsection

@section('content')
<div class="container">
    <div class="card">
        <form action="" method="POST">
            <div class="card-header">
                Add Team Member
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label font-weight-bold">
                        Photo
                    </label>
                    <div class="col-sm-10">
                        <div class="custom-file @error('photo') is-invalid @enderror">
                            <input name="logo" onchange="changed(this)" type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01">
                            <label id="fileLabel" class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                        @error('photo')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection