@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Add New slider</h1>
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
                                        <input type="text" class="form-control" required value="{{ old('title') }}"
                                            name="title" placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('title') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Slider Big Title</label>
                                        <input type="text" class="form-control" required value="{{ old('big_title') }}"
                                            name="big_title" placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('big_title') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Slider Image</label>
                                        <input type="file" class="form-control" name="slider_image" required
                                            value="{{ old('slider_image') }}">
                                        <div style="color:red;">{{ $errors->first('slider_image') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option {{ old('status') == 0 ? 'selected' : '' }} value="0">Active
                                            </option>
                                            <option {{ old('status') == 1 ? 'selected' : '' }} value="1">Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
