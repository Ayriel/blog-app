@extends('admin.template.main')

@section('title', 'Lista de images')

@section('images')
    <div class="row">
        <div class="col-md-6 mx-auto card-columns">
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
