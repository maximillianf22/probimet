@extends('layouts.app')

@section('content')
<div class="container card mt-5">
	<h2 class="m-3">Listado de registros en el formulario <img class="img-fluid" src="{{asset('images/big-logo.png')}}" alt=""  style="height: 35px;" /></h2>
	<table class="table table-striped border shadow-sm">
		<thead class="">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nombre</th>
				<th scope="col">Telefono</th>
				<th scope="col">Correo</th>
				<th scope="col">Tipo de Comercio</th>
			</tr>
		</thead>
		<tbody>
			@foreach($clients as $client)
			<tr>
				<td scope="row">{{$loop->iteration}}</td>
				<td>{{$client->name}} {{$client->last_name}}</td>
				<td>{{$client->phone}}</td>
				<td>{{$client->email}}</td>
				<td>{{$client->bussiness_type}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $clients->links() }}
</div>
@endsection
