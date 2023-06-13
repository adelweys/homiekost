@extends('layouts.master')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="user_id" value="1"> --}}
        <div class="mb-3">
          <label for="cost_name" class="form-label">cost_name</label>
          <input type="text" class="form-control @error('cost_name') is-invalid @enderror text-dark" id="cost_name" name="cost_name" value="{{ old('cost_name') }}">
          @error('cost_name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="total_kamar" class="form-label">total_kamar</label>
            <input type="text" class="form-control @error('total_kamar') is-invalid @enderror text-dark" id="total_kamar" name="total_kamar" value="{{ old('total_kamar') }}">
            @error('total_kamar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="cost_type" class="form-label">cost_type</label>
            <input type="text" class="form-control @error('cost_type') is-invalid @enderror text-dark" id="cost_type" name="cost_type" value="{{ old('cost_type') }}">
            @error('cost_type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="available_room" class="form-label">available_room</label>
            <input type="text" class="form-control @error('available_room') is-invalid @enderror text-dark" id="available_room" name="available_room" value="{{ old('available_room') }}">
            @error('available_room')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="cost_location" class="form-label">cost_location</label>
            <input type="text" class="form-control @error('cost_location') is-invalid @enderror text-dark" id="cost_location" name="cost_location" value="{{ old('cost_location') }}">
            @error('cost_location')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="cost_address" class="form-label">cost_address</label>
            <input type="text" class="form-control @error('cost_address') is-invalid @enderror text-dark" id="cost_address" name="cost_address" value="{{ old('cost_address') }}">
            @error('cost_address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror text-dark" id="description" name="description" value="{{ old('description') }}">
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="contact_person" class="form-label">contact_person</label>
            <input type="text" class="form-control @error('contact_person') is-invalid @enderror text-dark" id="contact_person" name="contact_person" value="{{ old('contact_person') }}">
            @error('contact_person')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="night_limit" class="form-label">night_limit</label>
            <input type="text" class="form-control @error('night_limit') is-invalid @enderror text-dark" id="night_limit" name="night_limit" value="{{ old('night_limit') }}">
            @error('night_limit')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="long_add" class="form-label">long_add</label>
            <input type="text" class="form-control @error('long_add') is-invalid @enderror text-dark" id="long_add" name="long_add" value="{{ old('long_add') }}">
            @error('long_add')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
            <label for="lat_add" class="form-label">lat_add</label>
            <input type="text" class="form-control @error('lat_add') is-invalid @enderror text-dark" id="lat_add" name="lat_add" value="{{ old('lat_add') }}">
            @error('lat_add')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label> 
          <input type="text" class="form-control @error('slug') is-invalid @enderror text-dark" id="slug" name="slug" value="{{ old('slug') }}">
          @error('slug')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Masukkan Gambar</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('photo') is-invalid @enderror text-dark" type="file" id="photo" name="photo" onchange="previewImage()">
            @error('photo')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
          </div>
        <button type="submit" class="btn btn-success mt-2">Create Post</button>
    </form>
</div>

<script>
    const cost_name = document.querySelector('#cost_name');
    const slug = document.querySelector('#slug');

    cost_name.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?cost_name=' + cost_name.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug )
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    });

    function previewImage(){
        const photo = document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(photo.files[0]);

        oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>

@endsection