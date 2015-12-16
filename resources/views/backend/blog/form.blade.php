@extends('layouts.backend')

@section('title', $post->exists ? 'Editing '.$post->title : 'Create New Post' )

@section('content')
	{!! Form::model($post, ['method' => $post->exists ? 'put' : 'post', 'route' => $post->exists ? ['backend.blog.update', $post->id] : ['backend.blog.store']]) !!}
		<div class="form-group">
			{!! Form::label('title') !!}
			{!! Form::text('title', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('slug') !!}
			{!! Form::text('slug', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('published_at') !!}
			{!! Form::text('published_at', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group excerpt">
			{!! Form::label('excerpt') !!}
			{!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('body') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit($post->exists ? 'Update Post' : 'Create New Post', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}

	<script type="text/javascript">
		new SimpleMDE({
			element: document.getElementsByName('body')[0]
		}).render();

		new SimpleMDE({
			element: document.getElementsByName('excerpt')[0]
		}).render();

		$('input[name=published_at]').datetimepicker({
			allowInputToggle: true,
			format: 'YYYY-MM-DD HH:mm:ss',
			showClear: true,
			defaultDate: '{{ old('published_at', $post->published_at) }}'
		});

		$('input[name=title]').on('blur', function(){
			var slugElement = $('input[name=slug]');

			if(slugElement.val()){
				return;
			}

			slugElement.val($(this).val().toLowerCase().replace(/[^a-z0-9-]+/g, '-').replace(/^-+|-+$/g, ''));
		});
	</script>
@endsection