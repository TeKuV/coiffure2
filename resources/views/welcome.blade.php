@extends('master.main')

@section('title')
    Home
@endsection

@section('content')

    @include('components.aboutus')

    @include('components.contactus')

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-10 clearfix">
        <div class="container">
            <div class="row pt-5">
                <!-- Single Blog Area  -->
                {{-- @include('components.hairstyle') --}}

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <center>
                                <figure class="figure">
                                    <img src="img/hairstyles-img/img1.jpeg" alt="" style="width: 200px">
                                    <figcaption class="figure-caption text-center">Kinky Twists</figcaption>
                                </figure>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <center>
                                <figure class="figure">
                                    <img src="img/hairstyles-img/img2.jpeg" alt="" style="width: 200px">
                                    <figcaption class="figure-caption text-center">Cornrow</figcaption>
                                </figure>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area blog-style-2 mb-100">
                        <div class="single-blog-thumbnail">
                            <center>
                                <figure class="figure">
                                    <img src="img/hairstyles-img/img3.jpeg" alt="" style="width: 200px">
                                    <figcaption class="figure-caption text-center">Kinky Twists</figcaption>
                                </figure>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

@endsection
