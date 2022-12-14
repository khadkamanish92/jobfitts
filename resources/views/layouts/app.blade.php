<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $data['pageTitle'] }}</title>

    <link rel="icon" type="image/x-icon" href="{{ asset($data['favicon']) }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">
    @stack('styles')
</head>

<body>

    @include('partials.nav')

    @yield('content')

    @include('partials.newsletter')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About</h2>
                        <p>{{ $data['setting']->footer_text ?? 'Nothing' }}</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a
                                    href="{{ $data['setting']->twitter_handle ?? 'jobfitts' }}"><span
                                        class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a
                                    href="{{ $data['setting']->facebook_handle ?? 'jobfitts' }}"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a
                                    href="{{ $data['setting']->linkedin_handle ?? 'jobfitts' }}"><span
                                        class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span
                                        class="text">{{ $data['setting']->address ?? 'No address' }}</span></li>
                                <li><a href="tel:{{ $data['setting']->phone ?? 'No phone' }}"><span
                                            class="icon icon-phone"></span><span
                                            class="text">{{ $data['setting']->phone ?? 'No phone' }}</span></a></li>
                                <li><a href="mailto:{{ $data['setting']->email ?? 'No phone' }}"><span
                                            class="icon icon-envelope"></span><span
                                            class="text">{{ $data['setting']->email ?? 'No email' }}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/aos.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('frontend/js/google-map.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

    @stack('scripts')

    @if (Session::has('success'))
        <script type="text/javascript">
            $(window).on('load', function() {
                var message = "{{ session('success') }}";
                toastr.options = {
                    "closeButton": true,
                    "showDuration": "1000",
                }
                toastr.success(message);
            });
        </script>
    @endif

    @if (Session::has('warning'))
        <script type="text/javascript">
            $(window).on('load', function() {
                var message = "{{ session('warning') }}";
                toastr.options = {
                    "closeButton": true,
                    "showDuration": "1000",
                }
                toastr.warning(message);
            });
        </script>
    @endif

    @customer
        <script type="text/javascript">
            var initial_count = {{ $data['initial_count'] }};

            function ajaxCallBack(data) {
                initial_count = data;
            }

            function getApplication() {
                $.ajax({
                    initial_count: initial_count,
                    url: '{{ route('count-applications', auth()->user()->customer->id ?? '') }}',
                    type: 'GET',
                    success: function(data) {
                        console.log('Initial count ' + this.initial_count);
                        if (data > this.initial_count) {
                            ajaxCallBack(data);
                            console.log('after callback')
                            var message = "New Application";
                            console.log('message');
                            toastr.options = {
                                "closeButton": true,
                                "showDuration": "1000",
                            }
                            toastr.warning(message);
                            console.log('response ' + data);
                        }
                    }
                });
            }
            $(document).ready(function() {
                setInterval(getApplication, 1000);
            });
        </script>
    @endcustomer

</body>

</html>
