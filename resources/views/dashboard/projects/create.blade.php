@extends('dashboard.layouts.app')

@section('title', 'إضافة مشروع')


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
                    <h5>Create a project</h5>
                </div>
                
                <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Project Name</label>
                            <input type="text" name="name" class="form-control form-control"
                                value="{{ old('name') }}">
                            @error('name')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Github</label>
                            <input type="text" name="github" class="form-control form-control"
                                value="{{ old('github') }}">
                            @error('github')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label">Live</label>
                            <input type="text" name="live" class="form-control form-control"
                                value="{{ old('live') }}">
                            @error('live')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="exampleInputPassword1">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            <small>Upload a picture for project if existed!</small>
                            @error('image')
                                <p class="alert alert-danger"> {{ $message }} </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <textarea name="description" rows="3" class="form-control">{{ old('description') }}</textarea>
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
