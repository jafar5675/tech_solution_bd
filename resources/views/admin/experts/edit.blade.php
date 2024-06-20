@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Add New Expert</h1>
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
                                        <label>Designation</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('designation', $getRecord->qualification) }}" name="designation">
                                        <div style="color:red;">{{ $errors->first('designation') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('experience', $getRecord->qualification) }}" name="experience"
                                            placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience About The Project</label>
                                        <textarea class="form-control" name="project_experience" id="compose-textarea-1" rows="3">{{ old('project_experience', $getRecord->project_experience) }}</textarea>
                                        <div style="color:red;">{{ $errors->first('project_experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>About The Expert</label>
                                        <textarea class="form-control" name="about_expert" id="compose-textarea-2" rows="3">{{ old('about_expert', $getRecord->about_expert) }}</textarea>
                                        <div style="color:red;">{{ $errors->first('about_expert') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Expert Image</label>
                                        <img src="{{ asset('upload/expert/' . $getRecord->expert_image) }}"
                                            alt="{{ $getRecord->name }}" height="50px;" width="70px;">
                                        <input type="file" class="form-control" name="expert_image"
                                            value="{{ old('expert_image', $getRecord->expert_image) }}">
                                        <div style="color:red;">{{ $errors->first('expert_image') }}</div>
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
    <script>
        $('#compose-textarea-1').summernote({
            height: 200,
        });
        $('#compose-textarea-2').summernote({
            height: 200,
        });
    </script>
@endsection
