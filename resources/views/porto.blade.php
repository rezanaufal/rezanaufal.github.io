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
                <div class="page-title">
                    <h2 class="page-title__title">Hello, my name is Reza.<br>I

                        <!-- typing__module -->
                        <div class="typing__module">
                            <div class="typed-strings"><span>'m a Cartoon Artist</span><span> do creative
                                    drawing</span><span>also do comic skit</span>
                            </div><span class="typed"></span>
                        </div><!-- End / typing__module -->

                    </h2>
                    <p class="page-title__text"></p>
                    <div class="page-title__divider"></div>
                </div><!-- End / page-title -->

            </div>
        </section>
        <!-- End / Section -->


        <!-- Section -->
        <section class="awe-section bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 ">

                        <!-- title -->
                        <div class="title">
                            <h2 class="title__title">My work</h2>
                        </div><!-- End / title -->

                    </div>
                </div>
                <div class="grid-css grid-css--masonry" data-col-lg="3" data-col-md="2" data-col-sm="2" data-col-xs="1"
                    data-gap="30">
                    <div class="grid__inner">
                        <div class="grid-sizer"></div>
                        @foreach ($portofolio as $portofolio)
                        <div class="grid-item">
                            <div class="grid-item__inner">
                                <div class="grid-item__content-wrapper">

                                    <!-- work -->
                                    <div class="work"><a href="/work-detail/{{$portofolio->id}}">

                                            <!-- hoverbox ef-slide-bottom -->
                                            <div class="hoverbox ef-slide-bottom light">

                                                <!-- hb_front -->
                                                <div class="hb_front"><img src="{{ $portofolio->gambar }}" alt="" />
                                                </div><!-- End / hb_front -->


                                                <!-- hb_back -->
                                                <div class="hb_back">
                                                    <h2 class="work__title">{{ $portofolio->judul }}</h2><span
                                                        class="work__text">View detail</span>
                                                </div><!-- End / hb_back -->

                                            </div><!-- End / hoverbox ef-slide-bottom -->
                                        </a>
                                    </div><!-- End / work -->

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <div class="awe-text-center mt-50">
                    <a class="md-btn md-btn--outline-primary" href="#">ALL WORK
                    </a>
                </div>
            </div>
        </section>
        

    </div>
    

</div>

@endsection
