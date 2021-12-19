@extends('master.main')

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/b10.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content text-center">
                        <h2>WELCOME</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

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
                                    <img src="img/hairstyles-img/img1.jpeg" alt="" style="width: 200px" >
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
                                    <img src="img/hairstyles-img/img2.jpeg" alt="" style="width: 200px" >
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
                                    <img src="img/hairstyles-img/img3.jpeg" alt="" style="width: 200px" >
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
