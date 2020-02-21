@extends('admin.layouts.app')

@section('content_body')

<div class="container">
    @foreach($categories as $category)
        <h1>{{$category->title}}</h1>
    @endforeach
</div>

@endsection