@extends('master')
@section('title')
    BlogHub || Edit Blog
@endsection
@section('body')
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                @if($message = Session::get('message'))
                    <h4 class="text-center text-success fw-bolder mb-4">{{ $message }}</h4>
                @endif
                <div class="card shadow border-dark">
                    <div class="card-header bg-dark">
                        <h3 class="text-center text-warning mb-0">Edit Blog</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="title" class="fw-bolder text-dark fs-5">Blog Title</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="title" value="{{ $blog->title }}" id="title" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="author" class="fw-bolder text-dark fs-5">Blog Author</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <input type="text" name="author" value="{{ $blog->author }}" id="author" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="description" class="fw-bolder text-dark fs-5">Blog Description</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <textarea name="description" id="description" class="form-control border-dark">{{ $blog->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="image" class="fw-bolder text-dark fs-5">Blog's Thumbnail</label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="mb-4">
                                            <img src="{{ asset($blog->image) }}" alt="" height="100px" width="100px">
                                        </div>
                                        <input type="file" name="image" id="image" class="form-control border-dark">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row justify-content-end">
                                    <div class="col-lg-8">
                                        <input type="submit" name="btn" value="Update Blog" class="fs-6 fw-bolder btn btn-dark text-warning w-100">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
