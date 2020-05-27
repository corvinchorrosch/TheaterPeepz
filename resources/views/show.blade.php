@foreach($event as $eventData)
    <img src="{{$eventData['images'][0]['url']}}">
    <p>{{$eventData['name']}}</p>
    <p>{{$eventData['url']}}</p>
    <p>{{$eventData['_embedded']['venues'][0]['postalCode']}}</p>
@endforeach
