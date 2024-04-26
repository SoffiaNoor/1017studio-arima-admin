@extends('layouts.master')

@section('content')

@section('breadcrumb')
Website Information
@endsection

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                @if(session('success'))
                <div class="alert alert-success m-2" style="color:white;font-weight:bold;background:#31a72b!important">
                    {{ session('success') }}
                </div>
                @endif
                @if(session('error'))
                <div class="alert alert-danger m-2" style="color:white;font-weight:bold">
                    {{ session('error') }}
                </div>
                @endif
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title title">Website Information</h4>
                        <a class="btn btn-primary" href="{{ route('information.edit', $information->id) }}">
                            <i class="bi bi-pencil mx-1"></i>Change Profile
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="color:black">Header Logo</label>
                                    <div class="grid grid-cols-6">
                                        @if($information->logo_header)
                                        <div class="p-3 shadow-lg text-center"
                                            style="background-color: #ec1e22;border-radius:20px">
                                            <img id="image_display" class="object-contain items-center"
                                                style="width:100%;height:auto;"
                                                src="{{asset($information->logo_header)}}">
                                        </div>
                                        @else
                                        <img id="image_display" class="object-contain items-center"
                                            style="width:10rem;height:10rem;object-fit:cover"
                                            src="{{ asset('assets/img/no-photo.png') }}">
                                        @endif
                                    </div>
                                    <input type="file" class="form-control mt-3" id="file_input" name="logo_header"
                                        value="" disabled>
                                    @error('logo_header')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="color:black">Favicon Logo</label>
                                    <div class="grid grid-cols-6">
                                        @if($information->logo_favicon)
                                        <div class="p-3 shadow-lg text-center"
                                            style="background-color: #ffffff;border-radius:20px">
                                            <img id="image_display2" class="object-contain items-center"
                                                style="width:100%;height:auto"
                                                src="{{asset($information->logo_favicon)}}">
                                        </div>
                                        @else
                                        <img id="image_display" class="object-contain items-center"
                                            style="width:10rem;height:10rem;object-fit:cover"
                                            src="{{ asset('assets/img/no-photo.png') }}">
                                        @endif
                                    </div>
                                    <input type="file" class="form-control mt-3" id="file_input2" name="logo_favicon"
                                        value="" disabled>
                                    @error('logo_favicon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="color:black">Company Logo</label>
                                    <div class="grid grid-cols-6">
                                        @if($information->logo_company)
                                        <div class="p-3 shadow-lg text-center"
                                            style="background-color: #ffffff;border-radius:20px">
                                            <img id="image_display3" class="object-contain items-center"
                                                style="width:100%;height:auto"
                                                src="{{asset($information->logo_company)}}">
                                        </div>
                                        @else
                                        <img id="image_display3" class="object-contain items-center"
                                            style="width:10rem;height:10rem;object-fit:cover"
                                            src="{{ asset('assets/img/no-photo.png') }}">
                                        @endif
                                    </div>
                                    <input type="file" class="form-control mt-3" id="file_input3" name="logo_company"
                                        value="" disabled>
                                    @error('logo_company')
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
                                    <label>About Us Image</label>
                                    <div class="grid grid-cols-6">
                                        @if($information->image)
                                        <div class="p-3 shadow-lg text-center"
                                            style="background-color: #c7c7c7;border-radius:20px">
                                            <img id="image_display3" class="object-contain items-center"
                                                style="width:auto;height:10rem;object-fit:cover"
                                                src="{{asset($information->image)}}">
                                        </div>
                                        @else
                                        <img id="image_display3" class="object-contain items-center"
                                            style="width:10rem;height:10rem;object-fit:cover"
                                            src="{{ asset('assets/img/no-photo.png') }}">
                                        @endif
                                    </div>
                                    <input type="file" class="form-control mt-3" id="file_input3" name="image" value=""
                                        disabled>
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
                                    <label>Company Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Company Name" value="{{$information->name}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Company Slogan</label>
                                    <input type="text" name="slogan" id="slogan" class="form-control"
                                        placeholder="Company Slogan" value="{{$information->slogan}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea rows="10" name="description" id="description" cols="80"
                                        class="form-control" placeholder="Company Description" value="Mike"
                                        disabled>{{$information->description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description (English Version)</label>
                                    <textarea rows="10" name="description_eng" id="description_eng" cols="80"
                                        class="form-control" placeholder="Company Description" value="Mike"
                                        disabled>{{$information->description_eng}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" placeholder="Home Address"
                                        value="{{$information->address}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" placeholder="City"
                                        value="{{$information->email}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mx-1">
                                <div class="form-group">
                                    <label>Phone 1</label>
                                    <input type="text" class="form-control" placeholder="First phone number"
                                        value="{{$information->phone_1}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mx-1">
                                <div class="form-group">
                                    <label>Phone 2</label>
                                    <input type="text" class="form-control" placeholder="Second phone number"
                                        value="{{$information->phone_2}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 mx-1">
                                <div class="form-group">
                                    <label>Phone (SMS only)</label>
                                    <input type="text" class="form-control" placeholder="Phone number for sms only"
                                        value="{{$information->phone_sms}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Google Map</label>
                                    <input type="text" class="form-control" placeholder="Home Address"
                                        value="{{$information->google_map}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Order Whatsapp Message</label>
                                    <input type="text" class="form-control" placeholder="I want to order..."
                                        value="{{$information->order_wa}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Website Link</label>
                                    <input type="text" class="form-control" placeholder="I want to order..."
                                        value="{{$information->website_link}}" disabled>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="image">
                    <img src="{{asset($information->image)}}" alt="...">
                </div>
                <div class="card-body">
                    <a href="#">
                        <h5 class="title">{{$information->name}}</h5>
                    </a>
                    <p class="description">
                        {{$information->slogan}}
                    </p>
                    <iframe data-aos="fade-up" data-aos-duration="1000" src="{{$information->google_map}}" width="100%"
                        height="300" style="border:0; max-width: 100%; height: 500;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <hr>
                <div class="button-container">
                    <a href="{{$information->google_map}}" target="__"
                        class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="bi bi-house-door-fill"></i>
                    </a>
                    <a href="{{$information->link_wa}}" target="__" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="bi bi-telephone-fill"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('jquery')
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

    const fileInput3 = document.getElementById('file_input3');
    const imageDisplay3 = document.getElementById('image_display3');

    fileInput3.addEventListener('change', function() {
        if (fileInput3.files.length > 0) {
            const reader3 = new FileReader();
            reader3.onload = function(e) {
                imageDisplay3.src = e.target.result;
            };
            reader3.readAsDataURL(fileInput3.files[0]);
        }
    });
</script>
@endsection