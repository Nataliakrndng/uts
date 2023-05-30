@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="mt-5">
            <h1 class="text-3xl font-bold">{{ $post->title }}</h1>
            <p class="text-gray-500">{{ $post->description }}</p>
            <p class="text-gray-500">Author: {{ $post->author }}</p>
            <p class="text-gray-500">Date: {{ $post->created_at->format('M d, Y') }}</p>
            <p class="text-gray-500">Reading Time: {{ $post->reading_time }}</p>
        </div>
        <div class="mt-5">
            <div>{!! $post->body !!}</div>
        </div>
        <div class="mt-5">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Share</button>
        </div>
    </div>
@endsection
