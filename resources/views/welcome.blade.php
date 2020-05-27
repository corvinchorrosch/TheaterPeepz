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
    <input type="submit" value="Okay" class="btn btn-danger">
</form>
</div>


<!-- Card -->

@foreach($allEventsInGermany as $ticket)
<div class="container d-flex justify-content-center">
  <div class="card mb-3 mt-4 border-danger justify-content-center">
    <div class="row no-gutters">
      <div class="col-md-4">
      <img src="{{$ticket['images'][0]['url']}}" style="width: 100%">
      </div>
      <div class="col-md-8">
      <div class="card-body">
      <p>{{$ticket['name']}}</p>
      <p><a href="{{$ticket['url']}}">Show me the details</a></p>
      <a href="#" class="btn btn-danger mr-5">Remember</a><a href="#" class="btn btn-danger ">Message Friend</a>
      </div>
    </div>
  </div>
</div>
</div>
@endforeach
@endsection