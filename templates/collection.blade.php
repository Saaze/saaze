@extends('layout')

@section('title', "{$collection->title} (Page {$pagination->currentPage})")

@section('content')
@foreach ($pagination->entries as $entry)
<div class="mb-10 sm:mb-20">
    <h2><a href="{{ $entry->url }}">{{ $entry->title }}</a></h2>
    <p>{!! $entry->excerpt !!}</p>
</div>
@endforeach
<div class="flex justify-between my-20">
    @if ($pagination->prevUrl)
    <a href="{{ $pagination->prevUrl }}">&larr; Previous</a>
    @endif
    @if ($pagination->nextUrl)
    <a href="{{ $pagination->nextUrl }}">Next &rarr;</a>
    @endif
</div>
@endsection
