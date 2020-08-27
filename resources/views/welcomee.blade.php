<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/iconfont/icofont.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600&family=Source+Code+Pro:ital,wght@0,300;0,400;0,500;0,600;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <title>Home</title>
</head>
<body>


    <header>
        @include('admin.template.partials.nav')

    </header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1 class="logo-image">
                <a href="#">
                    <img class="image-content-title" src="{{ asset('img/logo.png') }}" alt="">
                </a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8">
            @include('flash::message')
        <!-- Standard post -->
            <article class="article">
                <div class="article-image">
                    <a href="#" title="#">
                        <img src="{{ asset('img/770x513-1.jpg') }}" alt="#"class="img-responsive article-image-mod">
                    </a>
                </div>
                <div class="article-box box">
                    <h3 class="box-title">
                        <a href="post-detail-standard.html" title="#">Even forest superpowers have limits</a>
                    </h3>
                    <div class="info">
                        <div>
                            <span class="date">March 26, <span data-current-year></span></span>
                        </div>
                        <div>by <a href="#" title="#">Themees</a></div>
                        <div>in <a href="#" title="#">Nature</a></div>
                        <div>3 min read</div>
                    </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim. Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies
                        bibendum...
                    </p>
                    <div class="btns text-center">
                        <a href="post-detail-standard.html" title="#" class="btn btn-color"><span>Continue reading</span></a>
                    </div>

                    <footer class="article-footer">
                        <div class="row ">
                            <div class="col-sm-12 col-lg-6 tags">
                                <a href="#" title="#">#Nature</a>
                                <a href="#" title="#">#Forest</a>
                            </div>
                            <div class="col-sm-12 col-lg-6 moreInfo">
                                <div><span><i class="fa fa-eye"></i> 86</span> Views</div>
                                <div><span><i class="fa fa-comments"></i> 36</span> Comments</div>
                            </div>
                        </div>
                    </footer>
                </div>
            </article>
        </div>
        <div class="col-xs-12 col-sm-4 aside ">
            <!-- Aside -->
            <aside class="col-xs-12 col-sm-12 aside">

                <div class="row">

                    <!-- About me box -->
                    <div class="col-xs-12 i">
                        <div class="box aboutMeBox ">
                            <div class="conten-about">
                                <img src="{{ asset('img/190x190-1.jpg') }}" alt="#" width="190" height="190" class="img-responsive image-about">
                                <div class="name">Ayriel Noriega</div>
                                <p class="info info-about">Blog specialist, design nerd and I like soccer.</p>

                                <div class="btns">
                                    {{-- <a href="page-about-me.html" title="#" class="btn"><span>Follow</span></a> --}}
                                    <a href="#" title="#" class="btn btn-color"><span>Message</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Categories -->
                    <div class="col-xs-12 i">
                        <div class="box categories ">
                            <h2>Categories</h2>

                            <div class="c">
                                <div class="i">
                                    <a href="#" title="#" class="clearfix">
                                        <span class="count">Creative</span>
                                        <span class="count">(68)</span>
                                    </a>
                                </div>
                                <div class="i">
                                    <a href="#" title="#" class="clearfix">
                                        <span class="title">Fashion</span>
                                        <span class="count">(35)</span>
                                    </a>
                                </div>
                                <div class="i">
                                    <a href="#" title="#" class="clearfix">
                                        <span class="title">Architecture</span>
                                        <span class="count">(12)</span>
                                    </a>
                                </div>
                                <div class="i">
                                    <a href="#" title="#" class="clearfix">
                                        <span class="title">Music</span>
                                        <span class="count">(27)</span>
                                    </a>
                                </div>
                                <div class="i">
                                    <a href="#" title="#" class="clearfix">
                                        <span class="title">Nature</span>
                                        <span class="count">(08)</span>
                                    </a>
                                </div>
                                <div class="i">
                                    <a href="#" title="#" class="clearfix">
                                        <span class="title">Lifestyle</span>
                                        <span class="count">(14)</span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tags -->
                    <div class="col-xs-12 i">
                        <div class="box tags ">
                            <h2>Tags</h2>

                            <div class="c">
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Nature</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Forest</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Fashion</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Food</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#New York</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Lifestyle</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Architecture</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Recipe</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Do it yourself</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Vintage</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Journey</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Chet faker</span></a>
                                <a href="#" title="#" class="btn btn-color btn-tags"><span>#Music</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>  --}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
