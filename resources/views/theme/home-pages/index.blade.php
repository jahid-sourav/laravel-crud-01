@extends('master')
@section('title')
    BlogHub || Home
@endsection
@section('body')
    <section class="section-padding">
        <h2 class="text-center">BlogHub - Home Page</h2>
    </section>
    <section class="pb-5">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4">
                        <div class="card border-dark mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ isset($blog->image) ? asset($blog->image) : '' }}" class="img-fluid rounded-start h-100" alt="Blog Thumbnail">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark fs-4">{{ $blog->title }}</h5>
                                        <h5 class="card-title text-secondary fs-4">{{ $blog->author }}</h5>
                                        <p class="card-text">{{ $blog->description }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection





