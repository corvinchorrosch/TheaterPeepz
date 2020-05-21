@extends('frontend/layouts/app')

@section('content')

<div class="container d-flex justify-content-center">
<div class="card mb-3 mt-4 border-info w-75 justify-content-center">
  <div class="row no-gutters">
    <div class="col-md-4">
    <svg class="bi bi-image " width="15em" height="15em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 00-1 1v10a1 1 0 001 1h12a1 1 0 001-1V3a1 1 0 00-1-1zm-12-1a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V3a2 2 0 00-2-2h-12z" clip-rule="evenodd"/>
  <path d="M10.648 7.646a.5.5 0 01.577-.093L15.002 9.5V14h-14v-2l2.646-2.354a.5.5 0 01.63-.062l2.66 1.773 3.71-3.71z"/>
  <path fill-rule="evenodd" d="M4.502 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" clip-rule="evenodd"/>
</svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title text-secondary">Lion King</h5>
        <p class="card-text text-info">Show Description <br> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur sequi maiores a suscipit reiciendis mollitia voluptate culpa</p>
        <a href="#" class="btn btn-info ">Remember</a><a href="#" class="btn btn-info ">Message Friend</a>
      </div>
    </div>
  </div>
</div>

@endsection 