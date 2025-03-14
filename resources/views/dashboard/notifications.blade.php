@extends('dashboard.layouts.app')

@section('title', 'الإشعارات')


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
                            <table id="notification-table" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>الإشعار</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $notification) 
                                    <tr>
                                        <td>
                                            @php
                                                $dataArray = json_decode($notification->data, true);

                                                echo $dataArray['message'];
                                            @endphp   
                                        </td>
                                        <td>
                                            @if (is_null($notification->read_at))
                                            <form action={{ route('notifications.read', $notification->id) }} method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button class="btn btn-primary" type="submit">Mark As Read</button>
                                            </form>
                                        @endif

                                        </td>
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
    $('#notification-table').DataTable({
        order: [
            [3, 'desc']
        ]
    });
</script>
    
@endpush