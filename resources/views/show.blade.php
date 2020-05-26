@foreach($event as $eventData)
    <p>{{$eventData['name']}}</p>
    <p>{{$eventData['postalCode']}}</p>
    @foreach($eventData['address'] as $address)
        {{$address}}
    @endforeach
@endforeach