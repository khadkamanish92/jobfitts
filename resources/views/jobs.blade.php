@extends('layouts.app')

@section('content')
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-start">
                <div class="col-md-8 ftco-animate text-center text-md-left mb-5">
                    <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Job Posts</span></p>
                    <h1 class="mb-3 bread">Apply Jobs</h1>
                </div>
            </div>
        </div>
    </div>

    @include('partials.find-a-candidate')

    @include('partials.categories')

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Recently Added Jobs</span>
                            <h2 class="mb-4">Hot Jobs</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-primary text-white badge py-2 px-3">Partime</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook,
                                                Inc.</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google,
                                                Inc.</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive Developer</a>
                                        </h2>
                                        <div class="badge-wrap">
                                            <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York
                                                Times</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook,
                                                Inc.</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive
                                                Developer</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York
                                                Times</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Full Stack Developer</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-warning text-white badge py-2 px-3">Fulltime</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Google,
                                                Inc.</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive
                                                Developer</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-info text-white badge py-2 px-3">Freelance</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York
                                                Times</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Frontend Development</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-secondary text-white badge py-2 px-3">Internship</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">Facebook,
                                                Inc.</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->

                        <div class="col-md-12 ftco-animate">
                            <div class="job-post-item py-4 d-block d-lg-flex align-items-center">
                                <div class="one-third mb-4 mb-md-0">
                                    <div class="job-post-item-header d-flex align-items-center">
                                        <h2 class="mr-3 text-black"><a href="#">Open Source Interactive
                                                Developer</a></h2>
                                        <div class="badge-wrap">
                                            <span class="bg-danger text-white badge py-2 px-3">Temporary</span>
                                        </div>
                                    </div>
                                    <div class="job-post-item-body d-block d-md-flex">
                                        <div class="mr-3"><span class="icon-layers"></span> <a href="#">New York
                                                Times</a></div>
                                        <div><span class="icon-my_location"></span> <span>Western City, UK</span></div>
                                    </div>
                                </div>

                                <div class="one-forth ml-auto d-flex align-items-center">
                                    <div>
                                        <a href="#"
                                            class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                                </div>
                            </div>
                        </div><!-- end -->
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.newsletter')
    {{-- newsletter --}}
@endsection