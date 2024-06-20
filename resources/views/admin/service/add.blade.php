@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Add New Service</h1>
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
                                        <input type="text" class="form-control" required value="{{ old('name') }}"
                                            name="name" placeholder="Service Name">
                                        <div style="color:red;">{{ $errors->first('name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Last Name</label>
                                        <input type="text" class="form-control" required value="{{ old('last_name') }}"
                                            name="last_name" placeholder="Service Name">
                                        <div style="color:red;">{{ $errors->first('last_name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type of Serveice</label>
                                        <input type="text" class="form-control" required value="{{ old('type') }}"
                                            name="type" placeholder="Service Type">
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" required value="{{ old('experience') }}"
                                            name="experience" placeholder="Your Experience">
                                        <div style="color:red;">{{ $errors->first('experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>About The Service</label>
                                        <textarea class="form-control" name="about_service" id="compose-textarea" rows="3"></textarea>
                                        <div style="color:red;">{{ $errors->first('about_service') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" required value="{{ old('image') }}"
                                            name="image">
                                        <div style="color:red;">{{ $errors->first('image') }}</div>
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
    <script>
        $('#compose-textarea').summernote({
            height: 200,
        });
    </script>
@endsection
