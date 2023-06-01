@extends('web.layouts.master')
@section('content')
<div class="pt-5">
    <div class="container">
      <h1 class="header__title text-uppercase fw-bold fs-2">{{$posts->title}}</h1>
      <div class="header__meta">
        {{-- <span class="header__author">{{ $posts->created_by}}</span> --}}
        <span class="header__date">Ngày viết: {{ $posts->created_at->format('d/m/Y') }}</span>
      </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-9 post-content">
            {!!$posts->description!!}
        </div>
        <div class="col-3">
            <h3 class="text-uppercase fw-bold">Bài viết liên quan</h3>
            <div>
                @foreach($related_posts as $post)
                    <div class="row mt-3">
                        <div class="col-4">
                            <a href="">
                                <img src="{{ asset('uploads/post/'.$post->image) }}" width="100%" height="50" alt="">
                            </a>
                        </div>
                        <div class="col-8">
                            <h5>
                                <a href="" class="text-dark">{{ $post->title }}</a>
                            </h5>
                            <p>{{ $posts->created_at->format('d/m/Y') }}</p>
                        </div>
                    </div>
                @endforeach
                
                <div class="text-center mt-4">
                    <a href="/tin-tuc">Xem tất cả</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection