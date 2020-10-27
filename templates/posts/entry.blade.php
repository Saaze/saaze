@extends('layout')

@section('title', $entry->title)

@section('content')
<p class="text-gray-600">{{ date('jS F Y', strtotime($entry->date)) }}</p>
<h1>{{ $entry->title }}</h1>
<div>{!! $entry->content !!}</div>
@endsection
