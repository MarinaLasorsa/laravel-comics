@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>COMICS</h1>
            <div class="row gy-3 mt-3">
                @foreach ($comics as $comic)
                <div class="col-2">
                    <div class="card">
                        <img src="{{$comic['thumb']}}" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">{{$comic['title']}}</h5>
                          <h5 class="card-subtitle mb-2">{{$comic['series']}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection