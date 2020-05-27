@extends('frontend/layouts/app')

@section('content')

<!-- Dropdown -->
<div class="container d-flex justify-content-center mt-3">
<form method="POST" action="{{route('showShowsByCity')}}">
    @csrf
    <select name="cities">
        <option value="*">Show me random shows</option>
        <option value="Hamburg">Show me shows in Hamburg</option>
        <option value="Bremen">Show me shows in Bremen</option>
        <option value="Berlin">Show me shows in Berlin</option>
    </select>
    <input type="submit" value="Okay" class="btn btn-secondary btn-number">
</form>
</div>


<!-- Card -->

@foreach($allEventsInGermany as $ticket)
<div class="container d-flex justify-content-center">
  <div class="card mb-3 mt-4 border-info justify-content-center" style="width: 85%">
    <div class="row no-gutters">
      <div class="col-md-4">
      <img src="{{$ticket['images'][0]['url']}}" style="width: 100%">
      </div>
      <div class="col-md-8">
      <div class="card-body">
      <p><h4>{{$ticket['name']}}</h4></p>
      <p><a href="{{$ticket['url']}}">Show me more details</a></p>
      <a href="#" class="btn btn-info mr-5 mt-2">Remember me!</a>
      <a href="#" class="btn btn-info mt-2">Share me with friends!</a>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach
@endsection