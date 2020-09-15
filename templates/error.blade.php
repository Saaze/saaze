@extends('layout')

@section('title', "{$code} {$message}")

@section('content')
<h1>{{ $code }}</h1>
<div>{{ $message }}</div>
@endsection
