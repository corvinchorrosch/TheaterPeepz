<!-- Dropdown -->
<form method="POST" action="{{route('showShowsByCity')}}">
    @csrf
    <select name="cities">
        <option value="*">Alle Städte</option>
        <option value="Hamburg">Hamburg</option>
        <option value="Bremen">Bremen</option>
        <option value="Berlin">Berlin</option>
    </select>
    <input type="submit" value="Okay">
</form>

<!-- Alle Städte -->
@foreach($allEventsInGermany as $ticket)
    <img src="{{$ticket['images'][0]['url']}}" style="width: 30%">
    <p><a href="/veranstaltung/{{$ticket['id']}}">{{$ticket['name']}}</a></p>
@endforeach