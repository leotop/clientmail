@extends('head');

@section('content')

<div class="wi-ma tc" style="min-height: 800px;">
	<a href="statistic" class="btn btn-success">Intoarce inapoi</a>
	<h2>{{ $created }}</h2>

	<table class="table table-condensed table-striped table-bordered table-hover" style="min-width: 955px">
		<tr class="b">
			<td>Email</td>
			<td>Starea mesajului (citit-necitit)</td>
			<td>Expediat la (anul, data, luna, ora)</td>
			<td>Citit la (anul, data, luna, ora)</td>
		</tr>
		@foreach($send as $s)
			<tr>
				<td>{{ $s->email }}</td>
				<td>{{ $s->status }}</td>
				<td>{{ $s->created_at }}</td>
				<td>{{ $s->updated_at }}</td>
			</tr>
		@endforeach
	</table>
</div>	

@stop