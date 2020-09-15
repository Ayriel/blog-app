<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- chosen --}}
    <link rel="stylesheet" href="{{ asset('plugins/chosen/docsupport/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/docsupport/prism.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">


    {{-- CSS BOOTSTRAP --}}
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    {{-- END CSS BOOTSTRAP --}}


    {{-- UPLOAD IMAGE --}}

    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    {{-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="{{ asset('plugins/uploaderImage/dist/imageuploadify.min.css') }}" rel="stylesheet">

    {{--END UPLOAD IMAGE --}}


{{-- iconfont --}}
    <link rel="stylesheet" href="{{ asset('plugins/iconfont/icofont.min.css') }}">

{{-- trumbowyg --}}
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/dist/ui/trumbowyg.css') }}">



    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600&family=Source+Code+Pro:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <title>@yield('title', 'Default') | Panel admin</title>
</head>
<body>
    <header>
        @include('admin.template.partials.nav')

    </header>

<main>

    {{-- BODY --}}
    <div class="container-fluid min-vh">

            <div class="row mt-2 min-v">
                <div class="col-md-7 mx-auto ">
                    <div class="card-main">

                        @section('det')
                            <div class="card-head">
                                <h3>
                                    @yield('title', 'Default')
                                </h3>
                            </div>
                            @include('flash::message')

                        @show

                        @yield('content')

                    </div>

                </div>


            </div>

            @yield('images')
    </div>

</main>


<footer id="footer">
    {{-- <div class="logoWrap">
        <div class="container">
            <h1>
                <a href="index.html" title="#">
                    <img src="img/logo.png" alt="#" width="208" height="108" class="img-responsive">
                    <strong>Blogee</strong>
                </a>
            </h1>
        </div>
    </div> --}}

    <div class="box copyright">
        <div class="container">
            Copyright. All Rights Reserved.
        </div>
    </div>
</footer>


<!-- Import jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.js') }}"></script>

    {{-- BOOTSTRAP --}}
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

    {{-- UPLOAD IMAGE --}}
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('plugins/uploaderImage/dist/imageuploadify.min.js') }}"></script>
    <script src="{{ asset('plugins/uploaderImage/dist/app.js') }}"></script>
    {{--END UPLOAD IMAGE --}}

    {{-- TRUMBOWYG --}}
    <script src="{{ asset('plugins/trumbowyg/dist/trumbowyg.js') }}"></script>

    {{-- chosen --}}
    <script src="{{ asset('plugins/chosen/chosen.jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('plugins/chosen/docsupport/prism.js') }}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('plugins/chosen/docsupport/init.js') }}" type="text/javascript" charset="utf-8"></script>

    <script src="{{ asset('js/appArticle.js') }}"></script>

    <script src="{{ asset('js/prueba.js') }}"></script>






</body>
</html>
