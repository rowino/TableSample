@extends('layouts.bootstrap')

@section('content')
<table class="table table-striped">
	<thead>
		<tr>
		@foreach($headers as $header)
		<th>{{$header}}</th>
		@endforeach
		</tr>
	</thead>
	<tbody>
		@foreach($data as $row)
		<tr>
			@foreach($headers as $col)
			<td>{{$row[$col] or '-'}}</td>
			@endforeach
		</tr>
		@endforeach
	</tbody>
</table>
@stop