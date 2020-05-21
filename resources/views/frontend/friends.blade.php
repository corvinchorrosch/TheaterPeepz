@extends('frontend/layouts/app')

@section('content')
<div class="container d-flex justify-content-center">
  <div>
  <h3 class="mt-3 item-align-center">Add contact</h3>
</div>
</div>

    <div class="container d-flex justify-content-center">
  <form class="form-inline my-4 my-lg-0" method="GET" action="{{ url('/search') }}">
    @csrf
    <div class="input-group input-group-sm">
      <input name="q" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search">
      <div class="input-group-append">
        <button type="submit" class="btn btn-secondary btn-number" href="{{ url('/search') }}">
          Add
        </button>
      </div>
    </div>
</div>
  </form>

  <div class="container d-flex justify-content-center">
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio <button>x</button></li> 
    <li class="list-group-item">Dapibus ac facilisis in <button>x</button></li> 
    <li class="list-group-item">Vestibulum at eros <button>x</button></li> 
    <li class="list-group-item">Cras justo odio <button>x</button></li> 
    <li class="list-group-item">Dapibus ac facilisis in <button>x</button></li> 
    <li class="list-group-item">Vestibulum at eros <button>x</button></li> 
    <li class="list-group-item">Cras justo odio <button>x</button></li> 
    <li class="list-group-item">Dapibus ac facilisis in <button>x</button></li> 
    <li class="list-group-item">Vestibulum at eros <button>x</button></li>     
    <li class="list-group-item">Cras justo odio <button>x</button></li> 
    <li class="list-group-item">Dapibus ac facilisis in <button>x</button></li> 
    <li class="list-group-item">Vestibulum at eros <button>x</button></li> 
  </ul>
</div>
</div>

</div>
</div>
@endsection 
