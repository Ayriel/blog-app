@extends('front.template.main')


@section('title', $article->title)
@section('content')

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

            {{-- @foreach ($article as $articles) --}}
                {{-- {{ dd($article) }} --}}
                <article class="article">
                    <div class="article-image">
                        {{-- <a href="#" title="#"> --}}
                            @foreach ($article->images  as $image)

                                <img src="{{ asset('images/articles/'. $image->name) }}" alt="#"class="img-responsive article-image-mod">

                            @endforeach
                        {{-- </a> --}}
                    </div>
                    <div class="article-box box">
                        <h3 class="box-title">
                            <div class="title" href="#" title="#">{{ $article->title }}</div>
                        </h3>
                        <div class="info">
                            <div>
                                <span class="date">March 26, <span data-current-year></span></span>
                            </div>
                            <div>{{ $article->created_at->diffForHumans() }}</div>
                        </div>
                        <p class="description drop-cap">
                            {{ $article->content }}
                            {{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris accumsan eleifend magna. Curabitur scelerisque vitae augue ac dignissim. Aliquam erat volutpat. Proin in ultricies ligula. Etiam rutrum porta lacus in posuere. vel tortor tempor risus ultricies
                            bibendum... --}}
                        </p>


                        <footer class="article-footer">
                            <div class="row ">
                                <div class="col-sm-12 col-lg-6 tags">
                                        <a href="#" title="#">{{ $article->category->name . ' -- ' }}</a>
                                        @foreach ($article->tags as $item)
                                      {{-- {{  dd($article->tag)}} --}}
                                            <a href="#" title="#">#{{ $item->name }}</a>
                                        @endforeach
                                </div>

                            </div>
                        </footer>


                    </div>



                        {{-- START COMMENTS --}}
                        <div class="comentarios box">
                        <h3 class="coment-title">Comentarios</h3>



                        <div id="disqus_thread"></div>
                        <script>

                                /**
                                *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                /*
                                var disqus_config = function () {
                                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                */
                                (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://blogueate.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                                })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                        {{-- END COMMENTS --}}


                </article>
            {{-- @endforeach --}}




        </div>
        <div class="col-xs-12 col-sm-4 aside ">
            <!-- Aside -->
            <aside class="col-xs-12 col-sm-12 aside">

                @include('front.partials.aside')

            </aside>
        </div>
    </div>
</div>

@endsection
