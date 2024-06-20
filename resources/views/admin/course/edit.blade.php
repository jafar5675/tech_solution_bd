@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Edit Course</h1>
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
                                        <label>Name</label>
                                        <input type="text" class="form-control" required name="name"
                                            value="{{ old('name', $getRecord->name) }}">
                                        <div style="color:red;">{{ $errors->first('name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Course Type</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('type', $getRecord->type) }}" name="type">
                                        <div style="color:red;">{{ $errors->first('type') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('experience', $getRecord->experience) }}" name="experience">
                                        <div style="color:red;">{{ $errors->first('experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>About The Course</label>
                                        <textarea class="form-control" name="about_course" id="compose-textarea" rows="3">{{ old('about_course', $getRecord->about_course) }}</textarea>
                                        <div style="color:red;">{{ $errors->first('about_course') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Image</label>
                                        <img src="{{ asset('upload/course/' . $getRecord->image) }}"
                                            alt="{{ $getRecord->name }}" height="50px;" width="70px;">
                                        <input type="file" class="form-control" name="image"
                                            value="{{ old('image', $getRecord->image) }}">
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
