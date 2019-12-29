@extends('layouts.app')

@section('title')
New Project
@endsection

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
                            <input name="event" onclick="toggleEvent(this)" class="form-check-input" type="radio" id="inlineCheckbox1" value="yes">
                            <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="event" onclick="toggleEvent(this)" class="form-check-input" type="radio" id="inlineCheckbox2" value="no" checked>
                            <label class="form-check-label" for="inlineCheckbox2">No</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="event-location" class="col-sm-2 col-form-label font-weight-bold">
                        Event Location
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control event-class" name="event-location" id="event-location" placeholder="e.g. Kathmandu, Nepal" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="event-start-date" class="col-sm-2 col-form-label font-weight-bold">
                        Event Start Date
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control event-class" name="event-start-date" id="event-start-date" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="event-end-date" class="col-sm-2 col-form-label font-weight-bold">
                        Event End Date
                    </label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control event-class" name="event-end-date" id="event-end-date" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="event-start-time" class="col-sm-2 col-form-label font-weight-bold">
                        Event Start Time
                    </label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control event-class" name="event-start-time" id="event-start-time" placeholder="e.g. 12:00 pm" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="event-end-time" class="col-sm-2 col-form-label font-weight-bold">
                        Event End Time
                    </label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control event-class" name="event-end-time" id="event-end-time" placeholder="e.g. 12:00 pm" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="event-entry-fee" class="col-sm-2 col-form-label font-weight-bold">
                        Event Entry Fee
                    </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control event-class" name="event-entry-fee" id="event-entry-fee" placeholder="e.g. Rs.1200/- or Free" disabled>
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
                            <input multiple name="gallery" onchange="uploadGalleryImages(this)" type="file" class="custom-file-input" id="inputGroupFile02"
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
                <div class="form-group row">
                    <label class="col col-form-label">
                        All the gallery images will be displayed here! Click on the image to copy the image url. 
                    </label><br>
                </div>
                <div id="gallery" class="form-group row">
                    
                </div>
                <div class="form-group">
                    <textarea name="blog" id="" cols="30" rows="20"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Save
                    </button>
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

    function toggleEvent(e) {
        var enable;
        if (e.value == "yes")
            enable = true;
        else
            enable = false;
        var elements = document.getElementsByClassName("event-class");
        for (i=0; i<elements.length; i++) {
            elements[i].disabled = !enable;
        }
    }


    function uploadGalleryImages(e) {
        console.log('called the function');

        var files = e.files;
        var formData = new FormData();
        
        for (i=0; i<files.length; i++) {
            formData.append('photos[]', files[i]);
        }

        fetch("{{ route('admin-project-gallery-upload', $galleryID) }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            body: formData,
        }).then((response) => {
            response.text().then((data) => {
                document.getElementById("gallery").innerHTML = data;
            });
        });
    }

    function copyURL(e) {
        console.log(e.src);
        navigator.clipboard.writeText(e.src);
        toastr.success("Copied to clipboard.");
    }

</script>
@endsection