@extends('porto_layout')
@section('title. content')
@section('content')


<div class="page-wrap" id="root">
    <!-- Content-->
    <div class="wil-content">

        <!-- Section -->
        <section class="awe-section">
            <div class="container">

                <!-- page-title -->
                <div class="page-title pb-40">
                    <h2 class="page-title__title">{{ $portofolio->judul }}</h2>
                    <p class="page-title__text">Nam elit ligula, egestas et ornare non, </p>
                    <div class="page-title__divider"></div>
                </div><!-- End / page-title -->

            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="awe-section bg-gray">
            <div class="container">

                <!--  -->
                <div>
                    <div class="work-detail__entry">
                        <p style="font-size: 20px">{{ $portofolio->deskripsi }}</p>
                        <br>
                        <div class="work-img"><img src="{{ $portofolio->gambar }}" alt=""></div>

                    </div>
                    <div class="sharebox__module awe-text-center">
                        <p class="social-text">MY WORK PLATFORM</p>

                        <!-- social-icon -->
                        <a class="social-icon" href="https://www.facebook.com/"><i class="social-icon__icon fa fa-facebook"></i>
                        </a><!-- End / social-icon -->


                        <!-- social-icon -->
                        <a class="social-icon" href="https://twitter.com/?lang=en"><i class="social-icon__icon fa fa-twitter"></i>
                        </a><!-- End / social-icon -->


                        <!-- social-icon -->
                        <a class="social-icon" href="https://www.instagram.com/nd._.m/"><i class="social-icon__icon fa fa-instagram"></i>
                        </a><!-- End / social-icon -->



                    </div>
                </div><!-- End /  -->

                <div class="awe-text-center mt-50">
                    <a class="md-btn md-btn--outline-primary " href="/landing-page">All work
                    </a>
                </div>
            </div>
        </section>
        <!-- End / Section -->

    </div>
    <!-- End / Content-->
</div>

    @endsection
