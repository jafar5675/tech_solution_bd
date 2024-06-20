@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Experts List</h1>
                    </div>
                    <div class="col-sm-6" style="text-align: right;">
                        <a href="{{ url('admin/team/add') }}" class="btn btn-primary">Add New Team Member</a>
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
                                <h3 class="card-title">Teammeber List</h3>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Qualification</th>
                                            <th>Experience</th>
                                            <th>About Expert</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <td>{{ $value->id }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>
                                                    <img src="{{ asset('upload/team/' . $value->image) }}"
                                                        alt="{{ $value->name }}" height="50px" width="70px;">
                                                </td>
                                                <td>{{ $value->qualification }} </td>
                                                <td>{{ $value->experience }} </td>
                                                <td>{!! $value->about_member !!} </td>
                                                <td style="width: 150px;">
                                                    <a href="{{ url('admin/team/edit/' . $value->id) }}"
                                                        class="btn btn-success btn-sm">Edit</a>
                                                    <a href="{{ url('admin/team/delete/' . $value->id) }}"
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
