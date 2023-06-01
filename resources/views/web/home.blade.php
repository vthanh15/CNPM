
@extends('web.layouts.master')

@section('content')

<div style="">
    <div class="owl-carousel owl-theme" style="height: 900px;">
        <div class="item hero-1">
            <img src="{{  asset ('web/images/hero_1.jpg') }}" alt="Image" style="display: block;
            width: 100%;
            height: 900px; object-fit: cover;">
            <div class='hero-content'>
                <h1 class="heading font-weight-bold" data-aos="fade-up">Cùng nhau khám phá tỉnh Nghệ An</h1>
                <p class="mb-5" data-aos="fade-up">Nghệ An là tỉnh nằm ở vị trí trung tâm vùng Bắc Trung Bộ, là địa phương có lịch sử hình thành và phát triển lâu đời, giàu truyền thống cách mạng và tinh thần hiếu học. Nghệ An còn là mảnh đất đã sản sinh nhiều anh hùng, hào kiệt, danh tướng, danh nhân lịch sử cho đất nước. Đặc biệt, Nghệ An là quê hương của Chủ tịch Hồ Chí Minh, vị lãnh tụ vĩ đại của dân tộc Việt Nam, anh hùng giải phóng dân tộc, danh nhân văn hóa thế giới.</p>
            </div>
        </div>
        <div class="item">
            <img src="{{  asset ('web/images/hero_1.jpg') }}" alt="Image" style="display: block;
            width: 100%;
            height: 900px; object-fit: cover;">
            <div class='hero-content'>
                <h1 class="heading font-weight-bold" data-aos="fade-up">Cùng nhau khám phá tỉnh Nghệ An</h1>
                <p class="mb-5" data-aos="fade-up">Nghệ An là tỉnh nằm ở vị trí trung tâm vùng Bắc Trung Bộ, là địa phương có lịch sử hình thành và phát triển lâu đời, giàu truyền thống cách mạng và tinh thần hiếu học. Nghệ An còn là mảnh đất đã sản sinh nhiều anh hùng, hào kiệt, danh tướng, danh nhân lịch sử cho đất nước. Đặc biệt, Nghệ An là quê hương của Chủ tịch Hồ Chí Minh, vị lãnh tụ vĩ đại của dân tộc Việt Nam, anh hùng giải phóng dân tộc, danh nhân văn hóa thế giới.</p>
            </div>  
        </div>
    </div>
</div>
<div class="section section-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 order-lg-2 mb-5 mb-lg-0">
                <div class="image-stack mb-5 mb-lg-0">
                    <div class="image-stack__item image-stack__item--bottom" data-aos="fade-up"  >
                        <img src="{{  asset ('web/images/img_v_1.jpg') }}" alt="Image" class="img-fluid rellax ">
                    </div>
                    <div class="image-stack__item image-stack__item--top" data-aos="fade-up" data-aos-delay="100"  data-rellax-percentage="0.5">
                        <img src="{{  asset ('web/images/img_v_2.jpg') }}" alt="Image" class="img-fluid">
                    </div>
                </div>

            </div>
            <div class="col-lg-4 order-lg-1">

                <div>
                    <h2 class="heading mb-3" data-aos="fade-up" data-aos-delay="100">Explore All Corners of The World With Us</h2>

                    <p data-aos="fade-up" data-aos-delay="200">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                    <p data-aos="fade-up" data-aos-delay="300">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

                    <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">Read more</a></p>
                </div>
            </div>
            
        </div>

    </div>		
</div>

<div class="section service-section-1">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="heading-content" data-aos="fade-up">
                    <h2>Our <span class="d-block">Services</span></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="my-4" data-aos="fade-up" data-aos-delay="300"><a href="#" class="btn btn-primary">View All</a></p>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="100">
                        <div class="service-1">
                            <span class="icon">
                                <img src="{{  asset ('web/images/svg/01.svg') }}" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Tourism</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="200">
                        <div class="service-1">
                            <span class="icon">
                                <img src="{{  asset ('web/images/svg/02.svg') }}" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Package Tours</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="300">
                        <div class="service-1">
                            <span class="icon">
                                <img src="{{  asset ('web/images/svg/03.svg') }}" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Travel Insurance</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up"  data-aos-delay="400">
                        <div class="service-1">
                            <span class="icon">
                                <img src="{{  asset ('web/images/svg/04.svg') }}" alt="Image" class="img-fluid">
                            </span>
                            <div>
                                <h3>Airport Lounge Access</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="section section-3" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row align-items-center justify-content-between  mb-5">
            <div class="col-lg-5" data-aos="fade-up">
                <h2 class="heading mb-3">Discover Hundred of Travel Destinations</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>		
            <div class="col-lg-5 text-md-end" data-aos="fade-up" data-aos-delay="100">
                <div id="destination-controls">
                    <span class="prev me-3" data-controls="prev">
                        <span class="icon-chevron-left"></span>

                    </span>
                    <span class="next" data-controls="next">
                        <span class="icon-chevron-right"></span>

                    </span>
                </div>
            </div>
        </div>	

    </div>		

    <div class="destination-slider-wrap">
        <div class="destination-slider">
            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-1.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-1.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="{{route('detail')}}">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-3.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-4.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>


            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-5.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-6.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-7.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

            <div class="destination">
                <div class="thumb">
                    <img src="{{  asset ('web/images/img-4.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="mt-4">
                    <h3><a href="#">Paradise Beach, Palawan Island</a></h3>
                    <span class="meta">Maldives, Repbulic Maldives</span>
                </div>
            </div>

        </div>
    </div>

</div>

<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 order-lg-2" data-aos="fade-up">
                <img src="{{  asset ('web/images/img-1.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                <h2 class="heading mb-4">Sweet Memories Come To Life Again</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                <p class="my-4" data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary">Read more</a></p>
            </div>	
        </div>
    </div>
</div>

<div class="section bg-light">
    



    <h2 class="heading mb-5 text-center">Testimonials</h2>

    <div class="text-center mb-5">
        <div id="prevnext-testimonial">
            <span class="prev me-3" data-controls="prev">
                <span class="icon-chevron-left"></span>

            </span>
            <span class="next" data-controls="next">
                <span class="icon-chevron-right"></span>

            </span>
        </div>
    </div>

    <div class="wide-slider-testimonial-wrap">
        <div class="wide-slider-testimonial">
            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="{{  asset ('web/images/person_1.jpg') }}" alt="Free template by TemplateUX">
                        <h3>John Doe</h3>
                        <p class="position mb-5">CEO, Founder</p>
                    </div>
                    <p>
                        <div class="quote">&ldquo;</div>
                    &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="{{  asset ('web/images/person_2.jpg') }}" alt="Free template by TemplateUX">
                        <h3>James Woodland</h3>
                        <p class="position mb-5">Designer at Facebook</p>
                    </div>
                    <p>
                        <div class="quote">&ldquo;</div>
                    &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="{{  asset ('web/images/person_3.jpg') }}" alt="Free template by TemplateUX">
                        <h3>Rob Smith</h3>
                        <p class="position mb-5">Product Designer at Twitter</p>
                    </div>
                    <p>
                        <div class="quote">&ldquo;</div>
                    &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="{{  asset ('web/images/person_1.jpg') }}" alt="Free template by TemplateUX">
                        <h3>John Doe</h3>
                        <p class="position mb-5">CEO, Founder</p>
                    </div>
                    <p>
                        <div class="quote">&ldquo;</div>
                    &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="{{  asset ('web/images/person_2.jpg') }}" alt="Free template by TemplateUX">
                        <h3>James Woodland</h3>
                        <p class="position mb-5">Designer at Facebook</p>
                    </div>
                    <p>
                        <div class="quote">&ldquo;</div>
                    &ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.&rdquo;</p>

                </blockquote>
            </div>

            <div class="item">
                <blockquote class="block-testimonial">
                    <div class="author">
                        <img src="{{  asset ('web/images/person_3.jpg') }}" alt="Free template by TemplateUX">
                        <h3>Rob Smith</h3>
                        <p class="position mb-5">Product Designer at Twitter</p>
                    </div>
                    <p>
                        <div class="quote">&ldquo;</div>
                    &ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
                </blockquote>
            </div>
        </div>
    </div>



</div> <!-- /.untree_co-section -->

<div class="section">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <img src="{{  asset ('web/images/img_v_2.jpg') }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">

                <h2 class="heading mb-5">Frequently Asked <br> Questions</h2>

                <div class="custom-accordion" id="accordion_1">
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How to download and register?</button>
                        </h2>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->

                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How to create your paypal account?</button>
                        </h2>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to link your paypal and bank account?</button>
                        </h2>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                            </div>
                        </div>

                    </div> <!-- .accordion-item -->


                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">We are better than others?</button>
                        </h2>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.
                            </div>
                        </div>

                    </div> <!-- .accordion-item -->

                </div>
            </div>
        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        
        <div class="row">
            <div class="col-12"data-aos="fade-up" data-aos-delay="0">
                
                <h2 class="heading mb-5">Recent Posts</h2>
            </div>
        </div>
        
        <div class="row align-items-stretch">
            @foreach($posts as $post)
            <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <div class="media-entry">
                    <a href="{{route('blog.show', $post->id)}}">
                        <img src="{{  asset ('uploads/post/'.$post->image) }}" alt="Image" class="img-blog">
                    </a>
                    <div class="bg-white m-body">
                        <span class="date">{{ $post->created_at->format('d/m/Y') }}</span>
                        <h3><a href="{{route('blog.show', $post->id)}}">{{ $post->title}}</a></h3>
                        <p>{{ $post->sort_content }}</p>

                        <a href="{{route('blog.show', $post->id)}}" class="more d-flex align-items-center float-start">
                            <span class="label">Read More</span>
                            <span class="arrow"><span class="icon-keyboard_arrow_right"></span></span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>	
    </div>		
    
</div>

@endsection