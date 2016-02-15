@extends('head');

@section('content')

<div class="wi-ma tc" style="min-height: 800px;">
	<a href="home" class="btn btn-success">Pagina principala</a>
	<h2>Statistica de expediere a mesajelor</h2>

	@foreach($send as $s)
		<br>
		<a href="statistic-detail?created={{ $s->created_at }}" class="btn btn-primary" style="margin: 2px; min-width: 400px">
			{{ $s->created_at }}
		</a>
	@endforeach
</div>	

@stop