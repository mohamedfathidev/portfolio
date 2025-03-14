@extends('dashboard.layouts.app')

@section('title', 'تعديل مشروع')


@section('content')
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard/home') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('dashboard/projects') }}">المشاريع</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Edit the project</h5>
                </div>
                
                <form method="post" action="{{ route('projects.update', $details->id) }}" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Project Name</label>
                            <input type="text" name="name" class="form-control form-control"
                                value="{{ $details->name }}">
                            @error('name')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Github</label>
                            <input type="text" name="github" class="form-control form-control"
                                value="{{ $details->github }}">
                            @error('github')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Live</label>
                            <input type="text" name="live" class="form-control form-control"
                                value="{{ $details->live }}">
                            @error('live')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <label class="form-label" for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <small>Upload a picture for project if existed!</small>
                            @error('image')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                            </div>
                            <div class="form-group col-4 position-relative">
                                <a href="#" class="delete-image text-danger position-absolute top-0 start-50 translate-middle-x bg-white px-2 py-1 rounded shadow-sm" id="delete-image">Delete</a>
                                <img src="{{ asset('storage/'.$details->image) }}" width="100" height="100" class="d-block mx-auto mt-2 rounded">
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control">{{ $details->description }}</textarea>
                            @error('description')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary me-2">Submit</button>
                        <button type="reset" class="btn btn-light">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.6.0/tinymce.min.js"></script>


    
@endpush
