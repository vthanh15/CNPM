@extends('web.layouts.master')

@section('content')
<div class="hero overlay">

    <div class="img-bg rellax">
        <img src="{{  asset ('web/images/hero_2.jpg') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="heading" data-aos="fade-up">Bài viết</h1>
                <p class="mb-4" data-aos="fade-up">Chúng tôi sẽ mang đến bạn những thông tin cần thiết để bạn có một chuyến đi thú vị nhất</p>

                <div data-aos="fade-up">
                    <a href="https://www.youtube.com/watch?v=5n-e6lOhVq0" class="play-button glightbox3 w-100 text-center" >
                        <div class="d-inline-flex align-items-center ">
                            <span class="icon-button me-3">
                                <span class="icon-play"></span>
                            </span>
                            <span class="caption">Xem Video</span>
                        </div>
                    </a>
                </div>
            </div>            
        </div>
    </div>

    
</div>

<div class="section">
    <div class="container">
        <div class="row align-items-stretch">
            @foreach ($posts as $post)
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media-entry">
                        <a href="{{route('blog.show', $post->id)}}">
                            <img src="{{ asset('uploads/post/'.$post->image)}}" alt="Image" height="300px" width="380px" >
                        </a>
                        <div class="bg-white m-body">
                            <div class="d-flex align-items-center">
                                <span class="date">{{ $post->created_at->format('d/m/Y') }}</span>
                            </div>
                            <h3><a href="{{route('blog.show', $post->id)}}">{{ $post->title}}</a></h3>
                            <p>{{ $post->sort_content }}</p>

                            <a href="{{route('blog.show', $post->id)}}" class="more d-flex align-items-center float-start">
                                <span class="label">Đọc thêm</span>
                                <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-5 text-center" aria-label="Page navigation example" data-aos="fade-up" data-aos-delay="100">
                <ul class="custom-pagination pagination">
                    <li class="page-item prev"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item next"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>	
    </div>
</div>
@endsection