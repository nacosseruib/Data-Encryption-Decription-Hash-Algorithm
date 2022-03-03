<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('pageTitle', 'Welcome')</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fav  Icon Link -->
        <link rel="shortcut icon" type="image/png" href="images/fav.png">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/bootstrap.min.css')}}">
        <!-- themify icons CSS -->
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/themify-icons.css')}}">
        <!-- Animations CSS -->
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/animate.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/styles.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/green.css')}}" id="style_theme">
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/responsive.css')}}">
        <!-- morris charts -->
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/charts/css/morris.css')}}">
        <!-- jvectormap -->
        <link rel="stylesheet" href="{{ asset('assets/loginAssets/css/jquery-jvectormap.css')}}">
        <script src="{{ asset('assets/loginAssets/js/modernizr.min.js')}}"></script>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.css')}}">
        <!-- Summernote css -->
        <link href="{{ asset('assets/summernote/summernote-bs4.min.css') }}" rel="stylesheet" type="text/css" />

        @yield('styles')

        <style>
            body {
                /* background: #fff !important; */
                font-family: 'Roboto', sans-serif;
                background: url("{{ asset('bg-img.png') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div>
                @yield('pageContent')
            </div>
        </div>

        <script src="{{ asset('assets/loginAssets/js/jquery-3.2.1.min.js')}}"></script>
        <!-- Popper Library-->
        <script src="{{ asset('assets/loginAssets/js/popper.min.js')}}"></script>
        <!-- Bootstrap Library-->
        <script src="{{ asset('assets/loginAssets/js/bootstrap.min.js')}}"></script>
        <!-- morris charts -->
        <script src="{{ asset('assets/loginAssets/charts/js/raphael-min.js')}}"></script>
        <script src="{{ asset('assets/loginAssets/charts/js/morris.min.js')}}"></script>
        <script src="{{ asset('assets/loginAssets/js/custom-morris.js')}}"></script>
        <!-- Custom Script-->
        <script src="{{ asset('assets/loginAssets/js/custom.js')}}"></script>

        @yield('scripts')

        <!--Text Editor-->
        <!-- Summernote js -->
        <script src="{{ asset('assets/summernote/summernote-bs4.min.js') }}"></script>
        <!--tinymce js-->
        <script src="{{ asset('assets/summernote/tinymce.min.js') }}"></script>
        <!-- init js -->
        <script src="{{ asset('assets/summernote/form-editor.init.js') }}"></script>
        <script>
            $(document).ready(function() {
                var getVale;
                $('.summernoteShort').summernote({
                    height: 100,
                    tabsize: 2,
                });
                $('.summernoteLong').summernote({
                    height: 120,
                    tabsize: 2,
                });

            });
        </script>
    </body>
</html>
