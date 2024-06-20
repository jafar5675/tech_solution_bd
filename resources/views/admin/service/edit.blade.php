@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Edit Service</h1>
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
                                        <label>Service First Name</label>
                                        <input type="text" class="form-control" required name="name"
                                            value="{{ old('name', $getRecord->name) }}" placeholder="Service First Name">
                                        <div style="color:red;">{{ $errors->first('name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Last Name</label>
                                        <input type="text" class="form-control" required name="last_name"
                                            value="{{ old('last_name', $getRecord->last_name) }}"
                                            placeholder="Service Last Name">
                                        <div style="color:red;">{{ $errors->first('last_name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type of Serveice</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('type', $getRecord->type) }}" name="type">
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('experience', $getRecord->experience) }}" name="experience"
                                            placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>About The Expert</label>
                                        <textarea class="form-control" name="about_service" id="compose-textarea" rows="3">{{ old('about_service', $getRecord->about_service) }}</textarea>
                                        <div style="color:red;">{{ $errors->first('about_service') }}</div>
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
                            </form>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        $('#compose-textarea').summernote({
            height: 200,
        });
    </script>
@endsection
