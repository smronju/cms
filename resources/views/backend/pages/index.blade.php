@extends('layouts.backend')

@section('title', 'Pages')

@section('content')

	<a href="{{ route('backend.pages.create') }}" class="btn btn-primary">Create New Page</a>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>URI</th>
				<th>Name</th>
				<th>Template</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			<tbody>
				@if ($pages->isEmpty())
					<tr>
						<td colspan="5"	align="center">There are no pages.</td>
					</tr>
				@else
					@foreach ($pages as $page)
						<tr>
							<td><a href="{{ route('backend.pages.edit', $page->id) }}">{{ $page->title }}</a></td>
							<td><a href="{{ url($page->uri) }}">{{ $page->pretty_uri }}</a></td>
							<td>{{ $page->name or 'none' }}</td>
							<td>{{ $page->template or 'none' }}</td>
							<td><a href="{{ route('backend.pages.edit', $page->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
							<td><a href="{{ route('backend.pages.confirm', $page->id) }}"><span class="glyphicon glyphicon-remove"></span></a></td>
						</tr>
					@endforeach
				@endif
			</tbody>
		</thead>
	</table>
@endsection