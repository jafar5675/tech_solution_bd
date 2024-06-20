@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Service List</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/service/add') }}" class="btn btn-primary">Add New Service</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('_message')
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Admin List</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Type</th>
                                            <th>Experience</th>
                                            <th>About Service</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>
                                                    <img src="{{ asset('upload/service/' . $value->image) }}"
                                                        alt="{{ $value->name }}" height="50px;" width="70px;">
                                                </td>
                                                <td>{{ $value->type }}</td>
                                                <td>{{ $value->experience }}</td>
                                                <td>{{ $value->about_service }}</td>
                                                <td>{{ $value->status == 0 ? 'Inctive' : 'active' }}</td>
                                                <td>
                                                    <a href="{{ url('admin/service/edit/' . $value->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                    <a href="{{ url('admin/service/delete/' . $value->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('script')
@endsection
