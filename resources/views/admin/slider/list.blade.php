@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Admin List</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/slider/add') }}" class="btn btn-primary">Add New Slider</a>
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
                                <h3 class="card-title">Slider List</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Big Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td><img src="{{ asset('upload/slider/' . $value->slider_image) }}"
                                                        alt="{{ $value->title }}" height="50px;" width="70px;">
                                                </td>
                                                <td>{{ $value->title }}</td>
                                                <td>{{ $value->big_title }} </td>
                                                <td>{{ $value->status == 0 ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <a href="{{ url('admin/slider/edit/' . $value->id) }}"
                                                        class="btn btn-success">Edit</a>
                                                    <a href="{{ url('admin/slider/delete/' . $value->id) }}"
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
