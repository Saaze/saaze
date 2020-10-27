@extends('layout')

@section('title', "{$collection->title} (Page {$pagination->currentPage})")

@section('content')
@foreach ($pagination->entries as $entry)
<div class="mb-10 sm:mb-20">
    <h2><a href="{{ $entry->url }}">{{ $entry->title }}</a></h2>
    <p class="text-gray-600">
        {{ date('jS F Y', strtotime($entry->date)) }}
    </p>
    <p>{!! $entry->excerpt !!}</p>
</div>
@endforeach
<div class="flex justify-between my-20">
    @if ($pagination->nextUrl)
    <a href="{{ $pagination->nextUrl }}">&larr; Older</a>
    @endif
    @if ($pagination->prevUrl)
    <a href="{{ $pagination->prevUrl }}">Newer &rarr;</a>
    @endif
</div>
@endsection
