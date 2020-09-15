@extends('layout')

@section('title', "{$collection['title']} (Page {$entries['currentPage']})")

@section('content')
@foreach ($entries['entries'] as $entry)
<div class="mb-10 sm:mb-20">
    <h2><a href="{{ $entry['url'] }}">{{ $entry['title'] }}</a></h2>
    <p class="text-gray-600">
        {{ date('jS F Y', strtotime($entry['date'])) }}
    </p>
    <p>{!! $entry['excerpt'] !!}</p>
</div>
@endforeach
<div class="flex justify-between my-20">
    @if ($entries['nextUrl'])
    <a href="{{ $entries['nextUrl'] }}">&larr; Older</a>
    @endif
    @if ($entries['prevUrl'])
    <a href="{{ $entries['prevUrl'] }}">Newer &rarr;</a>
    @endif
</div>
@endsection
