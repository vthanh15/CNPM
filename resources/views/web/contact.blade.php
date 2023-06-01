@extends('web.layouts.master')

@section('content')
<div class="hero overlay">
    <div class="img-bg rellax">
        <img src="{{  asset ('web/images/hero_2.jpg') }}" alt="Image" class="img-fluid">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-start">
            <div class="col-lg-6 mx-auto text-center">
                <h1 class="heading" data-aos="fade-up">Liên hệ với chúng tôi</h1>
                <p data-aos="fade-up">Bạn cần biết thêm những thông tin hơn thì hãy liên hệ với chúng tôi.</p>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
        @elseif(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="row">
            <div class="col-12"	data-aos="fade-up" data-aos-delay="0">
                
                <h2 class="heading mb-5">Cho chúng tôi biết bạn cần gì</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-info">
                    <div class="address mt-4">
                        <i class="icon-room"></i>
                        <h4 class="mb-2">Địa chỉ:</h4>
                        <p>184 Lê Duẩn, Bến Thủy, TP.Vinh</p>
                    </div>

                    <div class="open-hours mt-4">
                        <i class="icon-clock-o"></i>
                        <h4 class="mb-2">Giờ làm việc:</h4>
                        <p>
                            Thứ 2 - Thứ 6:<br>
                            11:00 AM - 2300 PM
                        </p>
                    </div>

                    <div class="email mt-4">
                        <i class="icon-envelope"></i>
                        <h4 class="mb-2">Email:</h4>
                        <p>nhom14@gmail.com</p>
                    </div>

                    <div class="phone mt-4">
                        <i class="icon-phone"></i>
                        <h4 class="mb-2">SĐT:</h4>
                        <p>0912345678</p>
                    </div>
                </div>     
            </div>
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                <form action="{{url('/add-contact')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-3">
                            <input type="name" name="name" class="form-control" placeholder="Họ tên">
                        </div>
                        <div class="col-6 mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="subject" name="subject" class="form-control" placeholder="Công việc">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea cols="30" rows="7" name="message" class="form-control" placeholder="Lời nhắn"></textarea>
                        </div>

                        <div class="col-12">
                            <input type="submit" value="Gửi" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <!-- /.untree_co-section -->
@endsection