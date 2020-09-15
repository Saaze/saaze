@extends('layout')

@section('title', $entry['title'])

@section('content')
<h1>{{ $entry['title'] }}</h1>
<div>{!! $entry['content'] !!}</div>
@endsection
