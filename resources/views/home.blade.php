

@extends('layouts/main-layout')



@section('content')

<h1>Elenco film</h1>

{{-- {{dd($movies);}} --}}

<div id="home-container" class="container d-flex flex-wrap justify-content-center gap-4">
    

    @foreach ($movies as $movie)

    <div class="card" style="width: 18rem;">
    
        <div class="card-body">

          <h5 class="card-title">{{$movie->title}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
          <div class="card-text">
            <span><strong>Nationality:</strong>{{$movie->nationality}}</span>
            <span><strong>Pubblication Date:</strong>{{$movie->date}}</span>
            <span><strong>Vote:</strong>{{$movie->vote}}</span>


          </div>
          
        </div>
    </div>
        
    @endforeach

</div>

@endsection