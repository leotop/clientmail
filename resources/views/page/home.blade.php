@extends('head')
@section('content')

@if(isset($files))
	@foreach($files as $file)
		<a href='{{ url("public/uploads/about/".$file["basename"]) }}'>
			<img src='{{ url("public/uploads/about/".$file["basename"]) }}'>
		</a>
	@endforeach
@endif

<script>
$(document).ready(function(){
	$('#select-all').change(function(){
		$('.check').prop('checked', $(this).prop("checked"));
	});
});
</script>

<div class="wi-ma">
	<div class="bg-success tc">
		<i class="fa fa-pencil"></i>&nbsp;<b>Creeaza client</b>
	</div>
	<form action="add-client" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table class="table table-bordered table-condensed table-striped table-hover">
			<tr>
				<td>
					<input type="email" name="email" class="form-control" placeholder="email">
				</td>
				<td>
					<input type="text" name="nume" class="form-control" placeholder="nume">
				</td>
				<td>
					<input type="text" name="prenume" class="form-control" placeholder="prenume">
				</td>
				<td>
					<input type="text" name="ziua" class="form-control" placeholder="ziua nasterii">
				</td>
				<td>
					<input type="text" name="luna" class="form-control" placeholder="luna nasterii">
				</td>
				<td>
					<select name="sexul" class="form-control">
					   <option value="masculin">Masculin</option>
					   <option value="femenin">Femenin</option>
					</select>
				</td>
				<td>
					<input type="text" name="compania" class="form-control" placeholder="compania">
				</td>
				<td>
					<input type="submit" value="Creeaza client" class="btn btn-success">
				</td>
			</tr>
		</table>
	</form>

	<div class="bg-success tc" style="margin-top: -10px">
		<i class="fa fa-search"></i>&nbsp;<b>Cauta client</b>
	</div>
	<form action="search-client" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table class="table table-bordered table-condensed table-striped table-hover">
			<tr>
				<td>
					<input type="text" name="email" class="form-control" placeholder="email">
				</td>
				<td>
					<input type="text" name="nume" class="form-control" placeholder="nume">
				</td>
				<td>
					<input type="text" name="prenume" class="form-control" placeholder="prenume">
				</td>
				<td>
					<input type="text" name="ziua" class="form-control" placeholder="ziua nasterii">
				</td>
				<td>
					<input type="text" name="luna" class="form-control" placeholder="luna nasterii">
				</td>
				<td>
					<input type="text" name="sexul" class="form-control" placeholder="sexul">
				</td>
				<td>
					<input type="text" name="compania" class="form-control" placeholder="compania">
				</td>
				<td>
					<input type="submit" value="Cauta client" class="btn btn-success">
				</td>
			</tr>
		</table>
	</form>
	
	<table class="table table-bordered table-condensed table-striped table-hover">
	   <tr>
	      <td>
	         <a href="home" class="btn btn-primary btn-xs">Toata lista clienti</a>
	      </td>
	      <td></td>
	      <td></td>
	      <td></td>
	   </tr>
	</table>

	<div class="bg-primary tc">
		Lista clientilor expediere email
	</div>

	<form action="send-mail" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table class="table table-bordered table-condensed table-striped table-hover">
				<tr class="tc b">
					<td style="width: 20px">
						<input type="checkbox" id="select-all">
					</td>
					<td>Adresa email</td>
					<td>Nume</td>
					<td>Prenume</td>
					<td>Ziua nasterii</td>
					<td>Luna nasterii</td>
					<td>Sexul</td>
					<td>Compania</td>
				</tr>
				@foreach ($send as $s)
					<tr>
						<td style="width: 20px">
							<input type="checkbox" name="{{ $s->id }}" class="check">
						</td>
						<td>
							{{ $s->email }}
						</td>
						<td>
							{{ $s->nume }}
						</td>
						<td>
							{{ $s->prenume }}
						</td>
						<td>
							{{ $s->ziua }}
						</td>
						<td>
							{{ $s->luna }}
						</td>
						<td>
							{{ $s->sexul }}
						</td>
						<td>
							{{ $s->compania }}
						</td>
					</tr>
				@endforeach

				<tr>
					<td></td>
					<td>
						<input type="submit" value="Sterge selectate" name="delete" class="btn btn-danger btn-sm">
					</td>
				</tr>
		</table>
		<div style="width: 700px; margin: 0 auto">
			<input type="text" name="subject" class="form-control" placeholder="Subiectul mesajului">
			<br>
			<textarea name="msg"></textarea>


			<script>
				CKEDITOR.replace('msg', {
					filebrowserBrowseUrl: "{{ route('browse-image') }}",
					filebrowserUploadUrl: "{{ route('browse-image') }}",
					filebrowserImageBrowseUrl: "public/uploads/about",
					filebrowserImageUploadUrl: "{{ route('upload-image', ['_token' => csrf_token()]) }}",
				}); 
			</script>
			<br>
		</div>
			<table class="table table-bordered table-condensed table-striped table-hover">
				<tr>
					<td width="200"><img src="img/sablon1.png" class="img-responsive"></td>
					<td width="200"><img src="img/sablon2.png" class="img-responsive"></td>
					<td width="200"><img src="img/sablon3.jpg" class="img-responsive"></td>
				</tr>

				<tr>
					<td align="center"><input type="submit" value="Expediaza" name="expediaza1" class="btn btn-primary"></td>
					<td align="center"><input type="submit" value="Expediaza" name="expediaza2" class="btn btn-primary"></td>
					<td align="center"><input type="submit" value="Expediaza" name="expediaza3" class="btn btn-primary"></td>
				</tr>
			</table>
	</form>

</div>
<script type="text/javascript">
	$('a[href]').on('click', function(e) {
		window.opener.CKEDITOR.tools.callFunction(
		</script>
		<?php if(isset($test)) echo $test; ?>
		<script>,
		$(this).find('img').prop('src'));
	});
</script>
@stop