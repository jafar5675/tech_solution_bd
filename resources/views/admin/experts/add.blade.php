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
                                        <input type="text" class="form-control" required value="{{ old('name') }}"
                                            name="name" placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" required value="{{ old('designation') }}"
                                            name="designation" placeholder="Designation of the Team Member">
                                        <div style="color:red;">{{ $errors->first('designation') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" required value="{{ old('experience') }}"
                                            name="experience" placeholder="Your Experience">
                                        <div style="color:red;">{{ $errors->first('experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience about the Expert</label>
                                        <textarea class="form-control" name="project_experience" id="compose-textarea-1" rows="3"></textarea>
                                        <div style="color:red;">{{ $errors->first('project_experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>About The Expert</label>
                                        <textarea class="form-control" name="about_expert" id="compose-textarea-2" rows="3"></textarea>
                                        <div style="color:red;">{{ $errors->first('about_expert') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" class="form-control" required
                                            value="{{ old('expert_image') }}" name="expert_image">
                                        <div style="color:red;">{{ $errors->first('expert_image') }}</div>
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
        $('#compose-textarea-1').summernote({
            height: 200,
        });
        $('#compose-textarea-2').summernote({
            height: 200,
        });
    </script>
@endsection
