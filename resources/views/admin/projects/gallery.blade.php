@foreach($gallery as $photo)
    <div class="col-md-2">
        <img onclick="copyURL(this)" src="{{ $photo->path }}" class="rounded img-thumbnail" width="100" height="100">
    </div>
@endforeach
