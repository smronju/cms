@extends('layouts.frontend')

@section('title', $page->title)

@section('content')
	{!! $page->content_html !!}
@endsection