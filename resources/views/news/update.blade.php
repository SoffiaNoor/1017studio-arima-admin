@extends('layouts.master')

@section('content')

@section('breadcrumb')
News / Edit / {{$news->id}}
@endsection

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4 class="card-title">Edit News</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                        <div class="alert alert-danger m-2" style="color:white;font-weight:bold">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('news.update',$news->id)}}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="title"
                                            value="{{$news->title}}" required>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>Title (English Version)</label>
                                        <input type="text" id="title_eng" name="title_eng" class="form-control @error('title_eng') is-invalid @enderror" placeholder="title"
                                            value="{{$news->title_eng}}" required>
                                        @error('title_eng')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color:black">Image</label>
                                        <div class="grid grid-cols-6">
                                            @if($news->image)
                                            <img id="image_display" class="object-contain items-center"
                                                style="width:10rem;height:10rem;object-fit:cover"
                                                src="{{asset($news->image)}}">
                                            @else
                                            <img id="image_display" class="object-contain items-center"
                                                style="width:10rem;height:10rem;object-fit:cover"
                                                src="{{ asset('assets/img/no-photo.png') }}">
                                            @endif
                                        </div>
                                        <input type="file" class="form-control mt-3 @error('image') is-invalid @enderror" id="file_input" name="image"
                                            value="">
                                        @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('description') is-invalid @enderror"
                                            id="description" name="description"
                                            placeholder="Here can be your description"
                                            required>{{$news->description}}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Description (English Version)</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('description_eng') is-invalid @enderror"
                                            id="description_eng" name="description_eng"
                                            placeholder="Here can be your description"
                                            required>{{$news->description_eng}}</textarea>
                                        @error('description_eng')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success text-white" type="submit"><i
                                            class="bi bi-save mx-1"></i>Save</button>
                                    <a href="/news" class="btn btn-info text-white"><i
                                            class="bi bi-arrow-return-left mx-1"></i>Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')
<script src="https://cdn.tiny.cloud/1/a2m8qq7i48j1gc5izphurmemg39o165ft6pbpiz5a7waq805/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    const fileInput = document.getElementById('file_input');
    const imageDisplay = document.getElementById('image_display');

    fileInput.addEventListener('change', function() {
        if (fileInput.files.length > 0) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imageDisplay.src = e.target.result;
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>

<script>
    tinymce.init({
        selector: 'textarea#description',
        plugins: 'lists textcolor',
        toolbar: 'undo redo | bold italic | bullist numlist | forecolor backcolor',
        height: 300, // You can adjust the height as needed
        menubar: false // Optionally, you can hide the menubar
    });
    tinymce.init({
        selector: 'textarea#description_eng',
        plugins: 'lists textcolor',
        toolbar: 'undo redo | bold italic | bullist numlist | forecolor backcolor',
        height: 300, // You can adjust the height as needed
        menubar: false // Optionally, you can hide the menubar
    });
</script>
@endsection