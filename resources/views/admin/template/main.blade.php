<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/iconfont/icofont.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}

    <title>@yield('title', 'Default') | Panel admin</title>
</head>
<body>

<section>
    @include('admin.template.partials.nav')

    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-md-6 mx-auto">
                <div class="card p-3">

                    @section('det')
                        <div class="card-header">
                            @include('flash::message')
                            <h4>
                                @yield('title', 'Default')
                            </h4>
                        </div>
                    @show

                     @yield('content')


                </div>
            </div>
        </div>
    </div>



</section>







{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>  --}}
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
