@extends('admin.template.main')

@section('title', 'Lista de imagenes')

@section('images')
    <div class="row pt-3 pb-2">
        <div class="col-md-7 mx-auto card-columns">
        {{-- <div class="image-container d-flex"> --}}

            @foreach ($images as $image)
                <div class="card card-image">
                    <img class="card-img-top" src="/images/articles/{{ $image->name }}" alt="Card image cap">
                    <div class="card-body p-3 text-center">
                      <p class="card-text">{{ $image->article->title }}</p>
                    </div>
                </div>
            @endforeach
        {{-- </div> --}}

        </div>
    </div>
    <div class="pagination">

        {!! $images->render() !!}{{-- para que funciones la paginación --}}
    </div>

@endsection
