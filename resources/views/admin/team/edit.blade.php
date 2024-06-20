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
                                            name="name" value="{{ old('name', $getRecord->name) }}"
                                            placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('name') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('qualification', $getRecord->qualification) }}"
                                            name="qualification" placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('qualification') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Experience</label>
                                        <input type="text" class="form-control" required
                                            value="{{ old('experience', $getRecord->qualification) }}" name="experience"
                                            placeholder="Enter Your Name">
                                        <div style="color:red;">{{ $errors->first('experience') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label>About The Teammember</label>
                                        <textarea class="form-control" name="about_expert" id="compose-textarea" rows="3">{{ old('about_expert', $getRecord->about_expert) }}</textarea>
                                        <div style="color:red;">{{ $errors->first('about_expert') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Image</label>
                                        <img src="{{ asset('upload/expert/' . $getRecord->image) }}"
                                            alt="{{ $getRecord->name }}" height="50px;" width="70px;">
                                        <input type="file" class="form-control" name="image"
                                            value="{{ old('image', $getRecord->image) }}">
                                        <div style="color:red;">{{ $errors->first('image') }}</div>
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
