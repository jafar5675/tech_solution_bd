@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Edit Slider</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @include('_message')
                        <div class="card card-primary">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Slider Title</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ old('title', $getRecord->title) }}">
                                        <div style="color:red;">{{ $errors->first('title') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Slider Big Title</label>
                                        <input type="text" class="form-control" name="big_title"
                                            value="{{ old('big_title', $getRecord->big_title) }}">
                                        <div style="color:red;">{{ $errors->first('big_title') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Slider Image</label>
                                        <img src="{{ asset('upload/slider/' . $getRecord->slider_image) }}"
                                            alt="{{ $getRecord->title }}" height="50px;" width="70px;">
                                        <input type="file" class="form-control" name="slider_image"
                                            value="{{ old('slider_image', $getRecord->email) }}">
                                        <div style="color:red;">{{ $errors->first('slider_image') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option {{ $getRecord->status == 0 ? 'selected' : '' }} value="0">Active
                                            </option>
                                            <option {{ $getRecord->status == 1 ? 'selected' : '' }} value="1">Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('script')
@endsection
