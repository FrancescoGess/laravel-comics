
{{-- {{dd("ciao")}} --}}
@extends('layouts.app')

@section('main-content')
<div class="colore_back">
  <h1 class="titolo-fumetti">Comics</h1>
  <div class="row g-4">
      @foreach($comics as $comic)
      <div class="col-2">
          <div class="card">
            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{$comic['series']}}">
            <div>
              <p>{{ $comic['series'] }}</p>
            </div>
          </div>
      </div>
          
      @endforeach
  </div>
  <div class="button-section">
    <button class="btn btn-primary">LOAD MORE</button>
  </div>
</div>

@endsection