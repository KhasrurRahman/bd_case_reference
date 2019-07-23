@extends('layouts.frontend.app')
@section('title','contact us')

@push('css')
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
@endpush
@section('content')

    <!-- Title Header Start -->
    <section class="inner-header-title" style="background-image:
        url({{asset('public/assets/fontend/img/maxresdefault.jpg')}});">
        <div class="container">
            <h1>Contact Page</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- Title Header End -->

    <!-- Contact Page Section Start -->
    <section class="contact-page">
        <div class="container">
            <!--<h2>Contact Us</h2>-->

            <div class="col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-map-marker"></i>
                    <p>Room No:309(2nd Floor),Ibrahim Mansion, 11, Purana Paltan, Dhaka-1000</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-envelope"></i>
                    <p>easinsikder@bdcasereference.com</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-4">
                <div class="contact-box">
                    <i class="fa fa-phone"></i>
                    <p>Bangladesh: +88015-11164360</p>
                </div>
            </div>

        </div>
    </section>
    <!-- contact section End -->

    <!-- contact form -->
    <section class="contact-form">
        <div class="container">
            <h2>Message</h2>
            <form action="{{route('cotact')}}" method="post">
                @csrf
            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="Your Name" name="name" required>
            </div>

            <div class="col-md-6 col-sm-6">
                <input type="email" class="form-control" placeholder="Your Email" name="email">
            </div>

            <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" placeholder="Phone Number" name="phone">
            </div>


            <div class="col-md-12 col-sm-12">
                <textarea class="form-control" placeholder="Message" name="message" required></textarea>
            </div>

            <div class="col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
            </form>
        </div>
    </section>
    <!-- Contact form End -->

@endsection


@push('js')
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}

    <script>
        @if($errors->any())
        @foreach($errors->all() as $error)
        toastr.error('{{ $error }}','Error',{
            closeButton:true,
            progressBar:true,
        }       );
        @endforeach
        @endif
    </script>
@endpush
