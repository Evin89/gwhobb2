@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Users</h2>
	</div>
</div>
<div class="row">
	<div class="col-m">
		<ul class="list-group">
			<table>
				<tr>
					<th class="col-md-1">#</th>
					<th class="col-md-1">Gebruikersnaam</th>
					<th class="col-md-1">E-mail</th>
					<th class="col-md-2">Geregistreerd</th>
					<th class="col-md-1">`Rechten</th>
					@if(Auth::check())
					<th class="col-md-1">Delete</th>
					@endif
				</tr>

				@foreach($users as  $user)
				<tr class="user">
					<th class="col-md-1" >{{ $user->id }}</th>
					<td class="col-md-1">{{ $user->name  }}</td>
					<td class="col-md-1">{{ $user->email }}</td>
					<td class="col-md-2">{{ $user->created_at  }}</td>
					<td class="col-md-1">T.b.d.</td>
					@if(Auth::check())
					<td class="col-md-1"><a href="/admin/users/delete">X</a></td>
					@endif
				</tr>
				@endforeach

			</table>
		</ul>
	</div>
</div>

@stop