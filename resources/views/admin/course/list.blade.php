@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Course List</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/course/add') }}" class="btn btn-primary">Add New Course</a>
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
                                <h3 class="card-title">Course List</h3>
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
                                            <th>About Project</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td><img src="{{ asset('upload/course/' . $value->image) }}"
                                                        alt="{{ $value->name }}" height="50px;" width="70px;"></td>
                                                <td>{{ $value->type }} </td>
                                                <td>{{ $value->experience }} </td>
                                                <td>{!! $value->about_course !!} </td>
                                                <td style="width: 150px;">
                                                    <a href="{{ url('admin/course/edit/' . $value->id) }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="{{ url('admin/course/delete/' . $value->id) }}"
                                                        class="btn btn-danger btn-sm">Delete</a>
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
