@extends('admin.layouts.app')

@section('content_body')

<div class="container">
    <h1>Hello {{Auth::user()->name}} </h1>
</div>

@endsection