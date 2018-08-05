@extends('layouts.app')


@section('content')

    <div class="container-fluid">
        <div class="offset-md-4 col-md-4">

            @foreach($posts as $post)
           <h2 style="text-align: center;">{{$post->naam}}</h2>


            <h5 style="text-align: center;">
                {{$post->bericht}}
            </h5> <br>

            <h5 style="text-align: center;">{{$post->straat}}</h5>
            <h5 style="text-align: center;">{{$post->postcode}}</h5>
                <img class="center" style="display: block;
    margin-left: auto;
    margin-right: auto;" height="100" src="/images/{{$post->path}}" alt="">
                <hr>

            @endforeach



        </div>
    </div>

    @endsection