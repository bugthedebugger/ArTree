@extends('layouts.app')

@section('head')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({selector:'textarea',
        plugins: ["image","lists"],
        toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    });
</script>
@endsection

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            New Project
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="projectName" class="col-sm-2 col-form-label font-weight-bold">
                        Project name
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="projectName" placeholder="e.g. Awesome Project" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date" class="col-sm-2 col-form-label font-weight-bold">
                        Project Date
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="name" id="date">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="location" class="col-sm-2 col-form-label font-weight-bold">
                        Project Location
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="location" id="location" placeholder="e.g. Kathmandu, Nepal">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="category" class="col-sm-2 col-form-label font-weight-bold">
                        Project Category
                    </label>
                    <div class="col-sm-10">
                        <select id="category" class="form-control" required>
                            <option selected>Select Category</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="isEvent" class="col-sm-2 col-form-label font-weight-bold">
                        Is this an event?
                    </label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input name="event" class="form-check-input" type="radio" id="inlineCheckbox1" value="yes">
                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="event" class="form-check-input" type="radio" id="inlineCheckbox2" value="no" checked>
                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="featured" class="col-sm-2 col-form-label font-weight-bold">
                        Featured Image
                    </label>
                    <div class="input-group col-sm-10">
                        <div class="custom-file">
                            <input name="featured" onchange="changed(this)" type="file" class="custom-file-input" id="inputGroupFile01"
                            aria-describedby="inputGroupFileAddon01" required aria-required="true">
                            <label id="fileLabel" class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="featured" class="col-sm-2 col-form-label font-weight-bold">
                        Gallery Images*
                    </label>
                    <div class="input-group col-sm-10">
                        <div class="custom-file">
                            <input multiple name="gallery" onchange="" type="file" class="custom-file-input" id="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02" required aria-required="true">
                            <label id="fileLabel2" class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col col-form-label">
                        *Note: Gallery images can be used later for inline images in the blog. You need to upload these images before it can be used in the blog.
                    </label>
                </div>
                <div id="gallery" class="form-group row">
                    <label class="col col-form-label">
                        All the gallery images will be displayed here!
                    </label>
                </div>
                <div class="form-group">
                    <textarea name="blog" id="" cols="30" rows="20"></textarea>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function changed(e) {
        var fileName = document.getElementById("inputGroupFile01").files[0].name;
        console.log(fileName);
        var nextSibling = document.getElementById("fileLabel");
        nextSibling.innerText = fileName;
    }
</script>
@endsection