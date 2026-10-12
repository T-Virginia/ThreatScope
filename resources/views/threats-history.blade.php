<ul>
@if(count($records))
@foreach ($records as $record )
<li>IP: {{ $record->ip_address }} - Data: {{ $record->created_at}}</li>
@endforeach
@else
<li>Nessun record presente</li>
@endif
</ul>