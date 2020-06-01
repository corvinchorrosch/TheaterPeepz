@extends('frontend/layouts/app')

@section('content')
<div class="container d-flex justify-content-center">
  <div>
  <h3 class="mt-3 item-align-center text-white">Add contact</h3>
</div>
</div>

    <div class="container d-flex justify-content-center">
  <form class="form-inline my-4 my-lg-0" method="GET" action="{{ url('/search') }}">
    @csrf
    <div class="input-group input-group-sm">
      <input name="q" type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Find friend">
      <div class="input-group-append">
        <button type="submit" class="btn btn-info btn-number text-white" href="{{ url('/search') }}">
          Add
        </button>
      </div>
    </div>
</div>
  </form>

  <div class="container d-flex justify-content-center">
<div class="card mt-3" style="width: 18rem;">
  <ul class="list-group list-group-flush d-flex">

  @foreach($friends as $friend)
  <li class="list-group-item">{{$friend->name}}
    <form action="{{route('friends.destroy', $friend)}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="bg-danger text-white" type="submit">Delete</button>
    </form>
  </li> 
  @endforeach

  </ul>
</div>
</div>

</div>
</div>
@endsection 
