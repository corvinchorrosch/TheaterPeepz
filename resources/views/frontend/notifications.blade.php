@extends('frontend/layouts/app')

@section('content')

<div class="container d-flex justify-content-center pb-5">
  <div>
  <h3 class="mt-3 item-align-center text-white">Notifications</h3>
</div>
</div>

<div class="container d-flex justify-content-center pt-5">
<div class="card" style="width: 28rem;">
<ul class="list-group list-group-flush" style="width: 100%">
  <li class="list-group-item"><a href="">Corvin</a> is interested in <a href="https://www.ticketmaster.de/event/beth-hart-tickets/363357">Beth Hart</a> <br>
  <button class="bg-danger text-white">Delete</button></li>
  <li class="list-group-item"><a href="">Lisa</a> is interested in <a href="https://www.ticketmaster.de/event/theory-tickets/379777">Theory</a> <br>
  <button class="bg-danger text-white">Delete</button></li>
  </ul>
</div>
</div>

@endsection 