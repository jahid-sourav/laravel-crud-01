@extends('master')
@section('title')
    BlogHub || Manage Blog
@endsection
@section('body')
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if($message = Session::get('message'))
                        <h4 class="text-center text-success fw-bolder mb-4">{{ $message }}</h4>
                    @endif
                    <div class="card shadow border-dark">
                        <div class="card-header bg-dark">
                            <h3 class="text-center text-warning mb-0">Manage Blog</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-dark mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-warning fs-5">SN</th>
                                        <th class="text-center text-warning fs-5">Blog Title</th>
                                        <th class="text-center text-warning fs-5">Blog Author</th>
                                        <th class="text-center text-warning fs-5">Blog Description</th>
                                        <th class="text-center text-warning fs-5">Blog Image</th>
                                        <th class="text-center text-warning fs-5">Take Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td class="text-white">{{ $loop->iteration }}</td>
                                        <td class="text-white">{{ $blog->title }}</td>
                                        <td class="text-white">{{ $blog->author }}</td>
                                        <td class="text-white">{{ $blog->description }}</td>
                                        <td class="text-center">
                                            <img src="{{ isset($blog->image) ? asset($blog->image) : '' }}" alt="" height="100px" width="100px" style="object-fit: cover;">
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('edit', ['id' => $blog->id]) }}" class="btn btn-success btn-sm fw-bold">Edit</a>
                                            <a href="{{ route('delete', ['id' => $blog->id]) }}" onclick="return confirm('Delete This Item?')" class="btn btn-danger btn-sm fw-bold">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
