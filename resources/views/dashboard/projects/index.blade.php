@extends('dashboard.layouts.app')

@section('title', 'المشاريع')

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
            <!-- [ breadcrumb ] end -->

            {{-- Add Button + --}}
            <div class="row mb-2 text-end">
                <div class="page-header-title ms-auto">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary">
                        <i class="bi bi-plus"></i> Add Project
                    </a>
                </div>
            </div>
            <!-- [ Main Content ] start -->
            <div class="row">

                <!-- Default ordering table start -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>المشاريع</h5>
                            <small>Project Management CRUD</small>
                        </div>
                        <div class="card-body">
                            <div class="dt-responsive table-responsive">
                                <table id="order-table" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>الاسم</th>
                                            <th>الوصف</th>
                                            <th>الصورة</th>
                                            <th>الإجراءات</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($records as $record)
                                            <tr>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->description }}</td>
                                                <td>
                                                    <img src="{{ asset('storage/' . $record->image) }}" width="50"
                                                        height="50" class="img-fluid">
                                                </td>

                                                <td>
                                                    <x-action-buttons :id="$record->id" editRoute="projects.edit"
                                                        deleteRoute="projects.destroy" />                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default ordering table end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
@endsection

@push('script')
    <script>
        $('#order-table').DataTable({
            order: [
                [3, 'desc']
            ]
        });
    </script>
@endpush
