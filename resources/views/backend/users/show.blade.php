@extends('layouts.backend')

@section('title', 'Showing '.$user->name)

@section('content')

	<a href="{{ route('backend.users.index') }}" class="btn btn-info">Back to list</a>

	<br/><br/>

	<table class="table table-striped table-condensed">
		<tr>
			<th>Name</th>
			<td>{{ $user->name }}</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>{{ $user->email }}</td>
		</tr>
	</table>
@endsection