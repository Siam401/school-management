@extends('theme.default.layout')

@section('content')
    <!-- second header start -->
    <header class="second_header">
        <div class="cover">
            <div class="container">
                <div class="header_content">
                    <h2>{{ __('Teacher Information') }}</h2>
                    <ul>
                        <li><a href="{{ route('index') }}">{{ __('Home') }}</a></li>
                        <li>{{ __('Teacher') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- second header end -->

    <!-- teacher section start -->
    <section class="teacher_section">
        <div class="container">
            <div class="row">
                @if ($teachers->isEmpty())
                    <div class="col-12">
                        <h4 class="text-danger text-center">{{ __('No Teacher Found') }}</h4>
                    </div>
                @else
                    @foreach ($teachers as $teacher)
                        <div class="col-lg-3 col-md-4">
                            <div class="teacher_box">
                                <img src="{{ asset('uploads/images/' . $teacher->user->image) }}" alt="">
                                <h5>{{ $teacher->name }}</h5>
                                <p>{{ $teacher->designation }} </p>

                                <ul class="" style="display: flex; text-align:center; justify-content: center;">
                                    <li class="mx-2 mt-3">

                                        <a href="{{ $teacher->user->facebook }}"><i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="mx-2 mt-3"><a href="{{ $teacher->user->twitter }}"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="mx-2 mt-3"><a href="{{ $teacher->user->linkedin }}"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li class="mx-2 mt-3"><a href="{{ $teacher->user->google_plus }}"><i
                                                class="fa fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <!-- teacher section end -->


    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>-->
    <!-- youbube popup -->

    <!-- aos animate js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- include js -->
    <script>
        /* aos animate */
        AOS.init({
            duration: 700,
        })

        /* carousel js */
        $('.carousel').carousel({
            interval: false,
            interval: 5000,
            pause: "false"
        });

        /* download carousel */
        // $('.download_carousel').owlCarousel({
        //     autoplayTimeout:5000,
        //     autoplay:true,
        //     margin: 30,
        //     dots:false,
        //     loop:true,
        //     nav:false,
        //     responsive:{
        //         1200:{items:4},
        //         991:{items:3},
        //         768:{items:2},
        //         0:{items:1}
        //     }
        // });

        /* YouTubePopUp */
        // jQuery("a.bla-1").YouTubePopUp();
    </script>
@endsection
