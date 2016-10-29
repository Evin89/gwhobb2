@extends('layouts.layout')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h2>Users</h2>
		<hr>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
			<tr>
				<th class="">#</th>
				<th class="">Gebruikersnaam</th>
				<th class="">E-mail</th>
				<th class="">Geregistreerd</th>
				<th class="">Geactiveerd</th>
				<th>Editor</th>
				<th>Organiser</th>
				<th class="">Admin</th>
				@if(Auth::check())
				<th class=""></th>
				@endif
			</tr>

			@foreach($users as  $user)
				<tr class="user">
				<th class="" >{{ $user->id }}</th>
				<td class="">{{ $user->name  }}</td>
				<td class="">{{ $user->email }}</td>
				<td class="">{{ $user->created_at  }}</td>
				<td class="">{{ $user->active }}</td>
				<form action="/users/{{ $user->id }}" method="POST" role="form">
					<input type="hidden" name="id" value="{{  $user->id }}">
					{{  method_field("PATCH") }}
					{{ csrf_field() }}
					<td>
						<input type="checkbox" class="usersChechbox"  name="editor"
						@if($user->roles != null)
						@foreach($user->roles as $role)
						@if( $role->name == 'editor')
						checked
						@endif
						@endforeach>
						@endif
					</td>
					<td>
						<input type="checkbox" class="usersChechbox" name="organiser"
						@if($user->roles != null)
						@foreach($user->roles as $role)
						@if( $role->name == 'organiser')
						checked
						@endif
						@endforeach>
						@endif
					</td>
					<td>
						<input type="checkbox" class="usersChechbox"  name="admin"
						@if($user->roles != null)
						@foreach($user->roles as $role)
						@if( $role->name == 'admin')
						checked
						@endif
						@endforeach>
						@endif
					</td>

					<td class=""><input type="submit" value="update" class="btn btn-warning"></form> <a href="/users/{{ $user->id }}/delete" class="btn btn-danger">Verwijderen</a></td>
				</tr>
				@endforeach

			</table>

		</div>
	</div>

	@stop