@extends('layouts.horizontalLayout')

@section('content')

@section('title', ' Horizontal Layouts - Forms', 'File upload - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset(mix($cssFile)) }}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/dropzone/dropzone.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Blog Posts/</span> Create Blog Posts</h4>

<!-- Basic Layout & Basic with Icons -->
<div class="row">
  <!-- Basic with Icons -->
  <div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Create A New Blog Post</h5> <small class="text-muted float-end"></small>
      </div>
      <div class="card-body">

        <form method="POST" action="{{route('createPost')}}" enctype="multipart/form-data">
          @csrf
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Blog Post Category</label>
            <div class="col-sm-10">
              <div class="mb-3">
                <select class="form-select" name="postCategory" required aria-label="Default select example">
                  <option selected>Select Blog Post Category</option>
                  @foreach ($postCategories as $postCategory )
                  <option value="{{$postCategory->title}}">{{$postCategory->title}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Blog Post Title</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="ti ti-building"></i></span>
                <input type="text" name="postTitle" required  class="form-control" placeholder="Enter Blog Post Title Here..." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
              </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Blog Post Content</label>
            <div class="col-sm-10">
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="ti ti-mail"></i></span>
                <textarea id="editor" rows="7" name="postContent" type="text" class="form-control" placeholder="Enter Post Content Here..." aria-label="john.doe" aria-describedby="basic-icon-default-email2"></textarea>
              </div>
              <div class="form-text"> You can use letters, numbers & periods </div>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Upload Blog Post Image</label>
            <div class="col-sm-10">
              <div class="card mb-4">
                <h5 class="card-header">Upload Image Here...</h5>
                <div class="card-body">
                    <div class="dz-message needsclick">
                      Drop files here or click to upload
                    </div>
                    <div class="fallback">
                      <input name="thumbnail" type="file" />
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary ">Post A New Blog Post</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

@endsection
