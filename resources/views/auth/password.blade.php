@extends('layouts.auth')

@section('title', 'Reset Password')

@section('heading', 'Enter email to reset password.')

@section('content')
	{!! Form::open() !!}
	
		<div class="form-group">
			{!! Form::label('email') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary']) !!}
		
	{!! Form::close() !!}
@endsection