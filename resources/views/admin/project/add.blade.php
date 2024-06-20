@extends('admin.layouts.app')

@section('style')
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1>Add New Project</h1>
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
                                        <label>Project Name</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('project_name') }}" name="project_name"
                                            placeholder=" Your Client Name">
                                        <div style="color:red;">{{ $errors->first('project_name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Short Title</label>
                                        <input type="text" class="form-control" required value="{{ old('short_title') }}"
                                            name="short_title" placeholder="Short Title">
                                        <div style="color:red;">{{ $errors->first('short_title') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Short Description</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('short_description') }}" name="short_description"
                                            placeholder="Short Description">
                                        <div style="color:red;">{{ $errors->first('short_description') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Client Name</label>
                                        <input type="text" class="form-control" required value="{{ old('client') }}"
                                            name="client" placeholder=" Your Client Name">
                                        <div style="color:red;">{{ $errors->first('client') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Category</label>
                                        <input type="text" class="form-control" required value="{{ old('category') }}"
                                            name="category" placeholder="Enter Your category">
                                        <div style="color:red;">{{ $errors->first('category') }}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Service Type</label>
                                        <input type="text" class="form-control" required value="{{ old('service') }}"
                                            name="service" placeholder="Your Service Type">
                                        <div style="color:red;">{{ $errors->first('service') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>web</label>
                                        <input type="text" class="form-control" required value="{{ old('web') }}"
                                            name="web" placeholder="Your Web Address">
                                        <div style="color:red;">{{ $errors->first('web') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Project Image</label>
                                        <input type="file" class="form-control" required value="{{ old('image') }}"
                                            name="image">
                                        <div style="color:red;">{{ $errors->first('image') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Icon Image</label>
                                        <input type="file" class="form-control" required value="{{ old('icon') }}"
                                            name="icon">
                                        <div style="color:red;">{{ $errors->first('icon') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Deployment Service</label>
                                        <textarea class="form-control" name="deployment" id="compose-textarea-1" rows="3"></textarea>
                                        <div style="color:red;">{{ $errors->first('deployment') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Challenge of the Project</label>
                                        <textarea class="form-control" name="challenge" id="compose-textarea-2" rows="3"></textarea>
                                        <div style="color:red;">{{ $errors->first('challenge') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>The Result of the Project</label>
                                        <textarea class="form-control" name="result" id="compose-textarea-3" rows="3"></textarea>
                                        <div style="color:red;">{{ $errors->first('result') }}</div>
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
            height: 60,
        });
        $('#compose-textarea-2').summernote({
            height: 60,
        });
        $('#compose-textarea-3').summernote({
            height: 60,
        });
    </script>
@endsection
