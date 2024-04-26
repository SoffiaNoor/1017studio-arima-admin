@extends('layouts.master')

@section('content')

@section('breadcrumb')
Bug / Edit / {{$bug->id}}
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
                            <h4 class="card-title">Edit Bug</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                        <div class="alert alert-danger m-2" style="color:white;font-weight:bold">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('bug.update', $bug->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Types of Bug</label>
                                        <select class="form-control @error('types') is-invalid @enderror" id="exampleFormControlSelect1" name="types">
                                            <option selected disabled hidden>Select the types of bug</option>
                                            <option value="0" {{ $bug->types == 0 ? 'selected' : '' }}>Types of insect pests</option>
                                            <option value="1" {{ $bug->types == 1 ? 'selected' : '' }}>Other types of pests</option>
                                        </select>
                                        @error('types')
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
                                        <label>Title</label>
                                        <input type="text" id="title" name="title"
                                            class="form-control @error('title') is-invalid @enderror"
                                            placeholder="title" value="{{$bug->title}}" required>
                                        @error('title')
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
                                        <label>Title (English Version)</label>
                                        <input type="text" id="title_eng" name="title_eng"
                                            class="form-control @error('title_eng') is-invalid @enderror"
                                            placeholder="title" value="{{$bug->title_eng}}" required>
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
                                        <label style="color:black">Icon</label>
                                        <div class="grid grid-cols-6">
                                            @if($bug->icon)
                                            <img id="image_display" class="object-contain items-center"
                                                style="width:10rem;height:10rem;object-fit:cover"
                                                src="{{asset($bug->icon)}}">
                                            @else
                                            <img id="image_display" class="object-contain items-center"
                                                style="width:10rem;height:10rem;object-fit:cover"
                                                src="{{ asset('assets/img/no-photo.png') }}">
                                            @endif
                                        </div>
                                        <input type="file" class="form-control mt-3 @error('icon') is-invalid @enderror"
                                            id="file_input" name="icon" value="">
                                        @error('icon')
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
                                        <label style="color:black">Header Image</label>
                                        <div class="grid grid-cols-6">
                                            @if($bug->header_image)
                                            <img id="image_display2" class="object-contain items-center"
                                                style="width:13rem;height:10rem;object-fit:cover"
                                                src="{{asset($bug->header_image)}}">
                                            @else
                                            <img id="image_display2" class="object-contain items-center"
                                                style="width:10rem;height:10rem;object-fit:cover"
                                                src="{{ asset('assets/img/no-photo.png') }}">
                                            @endif
                                        </div>
                                        <input type="file"
                                            class="form-control mt-3 @error('header_image') is-invalid @enderror"
                                            id="file_input2" name="header_image" value="">
                                        @error('header_image')
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
                                        <label>Ekosistem (IDN Version)</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('ekosistem') is-invalid @enderror" id="ekosistem"
                                            name="ekosistem" placeholder="Here can be your ecosystem"
                                            required>{{$bug->ekosistem}}</textarea>
                                        @error('ekosistem')
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
                                        <label>Ekosistem (ENG Version)</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('ekosistem_eng') is-invalid @enderror"
                                            id="ekosistem_eng" name="ekosistem_eng"
                                            placeholder="Here can be your ecosystem"
                                            required>{{$bug->ekosistem_eng}}</textarea>
                                        @error('ekosistem_eng')
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
                                        <label>Fun Fact</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('funfact') is-invalid @enderror" id="funfact"
                                            name="funfact" placeholder="Here can be your funfact"
                                            required>{{$bug->funfact}}</textarea>
                                        @error('funfact')
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
                                        <label>Fun Fact (English Version)</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('funfact_eng') is-invalid @enderror" id="funfact_eng"
                                            name="funfact_eng" placeholder="Here can be your funfact"
                                            required>{{$bug->funfact_eng}}</textarea>
                                        @error('funfact_eng')
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
                                        <label>Penanggulangan (IDN Version)</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('penanggulangan') is-invalid @enderror"
                                            id="penanggulangan" name="penanggulangan"
                                            placeholder="Here can be your penanggulangan"
                                            required>{{$bug->penanggulangan}}</textarea>
                                        @error('penanggulangan')
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
                                        <label>Penanggulangan (ENG Version)</label>
                                        <textarea rows="10" cols="80"
                                            class="form-control @error('penanggulangan_eng') is-invalid @enderror"
                                            id="penanggulangan_eng" name="penanggulangan_eng"
                                            placeholder="Here can be your penanggulangan"
                                            required>{{$bug->penanggulangan_eng}}</textarea>
                                        @error('penanggulangan_eng')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Existing Bug Types</label>
                                    @foreach($bug->detailBugs as $bt)
                                    <div class="p-2 m-3" style="background:#e3e3e3;border-radius:10px">
                                        <div class="mb-3">
                                            <div class="input-group mt-2">
                                                <div class="custom-file">
                                                    <input type="file" name="image[]" class="custom-file-input"
                                                        id="existingLogoInput{{$loop->index}}">
                                                    <label class="custom-file-label"
                                                        for="existingLogoInput{{$loop->index}}">Choose file</label>
                                                </div>
                                            </div>
                                            <div class="mt-2" style="text-align: center;">
                                                <img class="img-thumbnail existing-preview-image"
                                                    src="{{ asset($bt->image) }}" style="width: 200px;height: 200px;object-fit: cover;">
                                            </div>
                                            <div class="col-sm-12 py-2" style="align-self: center">
                                                <div class="form-group">
                                                    <label>Bug Title</label>
                                                    <input type="text" name="title_bugs[]"
                                                        class="form-control title_bugs" style="background-color:#ffffff"
                                                        placeholder="Put your bug title here..."
                                                        value="{{$bt->title_bugs}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Latin Title</label>
                                                    <input type="text" name="latin_title[]"
                                                        class="form-control latin_title"
                                                        style="background-color:#ffffff"
                                                        placeholder="Put your bug latin title here..."
                                                        value="{{$bt->latin_title}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-success text-white" type="submit"><i
                                            class="bi bi-save mx-1"></i>Save</button>
                                    <a href="/bug" class="btn btn-info text-white"><i
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
    const fileInput2 = document.getElementById('file_input2');
    const imageDisplay2 = document.getElementById('image_display2');

    fileInput2.addEventListener('change', function() {
        if (fileInput2.files.length > 0) {
            const reader2 = new FileReader();
            reader2.onload = function(e) {
                imageDisplay2.src = e.target.result;
            };
            reader2.readAsDataURL(fileInput2.files[0]);
        }
    });
</script>
<script>
    tinymce.init({
        selector: 'textarea#ekosistem',
        plugins: 'lists textcolor',
        toolbar: 'undo redo | bold italic | bullist numlist | forecolor backcolor',
        height: 300, 
        menubar: false,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
    tinymce.init({
        selector: 'textarea#ekosistem_eng',
        plugins: 'lists textcolor',
        toolbar: 'undo redo | bold italic | bullist numlist | forecolor backcolor',
        height: 300,
        menubar: false,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
    tinymce.init({
        selector: 'textarea#penanggulangan',
        plugins: 'lists textcolor',
        toolbar: 'undo redo | bold italic | bullist numlist | forecolor backcolor',
        height: 300,
        menubar: false,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
    tinymce.init({
        selector: 'textarea#penanggulangan_eng',
        plugins: 'lists textcolor',
        toolbar: 'undo redo | bold italic | bullist numlist | forecolor backcolor',
        height: 300,
        menubar: false,
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function previewImage(input, previewElement) {
            var file = input.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    previewElement.src = event.target.result;
                    previewElement.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }

        function updateLabel(input) {
            var fileName = input.files[0].name;
            var label = input.closest('.custom-file').querySelector('.custom-file-label');
            label.textContent = fileName;
        }

        function addFileInputChangeListener(input, previewElement) {
            input.addEventListener('change', function() {
                previewImage(this, previewElement);
                updateLabel(this);
            });
        }

        var existingInputs = document.querySelectorAll('[name="image[]"]');
        existingInputs.forEach(function(input, index) {
            var previewElement = document.querySelectorAll('.existing-preview-image')[index];
            addFileInputChangeListener(input, previewElement);
        });
    });
</script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('addBugTypeBtn').addEventListener('click', function() {
        const bugTypeSectionContainer = document.getElementById('bugTypeSectionContainer');
        const bugTypeSectionTemplate = document.createElement('div');
        bugTypeSectionTemplate.classList.add('row');

        bugTypeSectionTemplate.innerHTML = `
            <div class="col-md-12">
                <label>Bug Types</label>
                <div class="row">
                    <div class="col-sm-12 py-2" style="background:#e3e3e3;border-radius:10px">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-12 py-2">
                                    <div class="form-group">
                                        <label style="color:black">Bug Type Image</label>
                                        <div class="grid grid-cols-6">
                                            <img class="object-contain items-center image_display"
                                                style="width:10rem;height:10rem;object-fit:cover"
                                                src="{{ asset('assets/img/no-photo.png') }}">
                                        </div>
                                        <input type="file" name="image[]" class="form-control mt-2 image_input" />
                                        <small class="text-muted">Please choose an image to upload.</small>
                                    </div>
                                </div>
                                <div class="col-sm-12 py-2" style="align-self: center">
                                    <div class="form-group">
                                        <label>Bug Title</label>
                                        <input type="text" name="title_bugs[]" class="form-control title_bugs"
                                            style="background-color:#ffffff"
                                            placeholder="Put your bug title here...">
                                    </div>
                                    <div class="form-group">
                                        <label>Latin Title</label>
                                        <input type="text" name="latin_title[]" class="form-control latin_title"
                                            style="background-color:#ffffff"
                                            placeholder="Put your bug latin title here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger remove-bug-type">Remove</button>
                    </div>
                </div>
            </div>
        `;

        bugTypeSectionContainer.appendChild(bugTypeSectionTemplate);

        const imageInput = bugTypeSectionTemplate.querySelector('.image_input');
        const imageDisplay = bugTypeSectionTemplate.querySelector('.image_display');

        imageInput.addEventListener('change', function() {
            if (imageInput.files.length > 0) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    imageDisplay.src = e.target.result;
                };
                reader.readAsDataURL(imageInput.files[0]);
            }
        });

        const removeButton = bugTypeSectionTemplate.querySelector('.remove-bug-type');
        removeButton.addEventListener('click', function() {
            bugTypeSectionTemplate.remove();
        });
    });
});


</script> --}}
@endsection