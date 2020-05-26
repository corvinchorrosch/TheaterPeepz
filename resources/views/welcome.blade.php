<!-- Dropdown -->
<form method="POST" action="{{route('showShowsByCity')}}">
    @csrf
    <select name="cities">
        <option value="*">Alle Städte</option>
        <option value="HH">Hamburg</option>
        <option value="HB">Bremen</option>
        <option value="BR">Berlin</option>
    </select>
    <input type="submit" value="Okay">
</form>

<!-- Alle Städte -->
@foreach($allEventsInGermany as $ticket)
    <p><a href="/veranstaltung/{{$ticket['id']}}">{{$ticket['name']}}</a></p>
@endforeach