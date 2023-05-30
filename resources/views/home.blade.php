@extends('layouts.app')

@section('content')
    <div class="mt-3 mb-3 border-8 p-5 ml-5 mr-5 border-blue-950">
        @if ($highlightBook)
            <div class="flex items-center justify-center">
                <img src="{{ $highlightBook->image }}" alt="{{ $highlightBook->title }}" class="w-1/4 h-1/4 mr-4">
                <div>
                    <h3 class="text-l underline font-bold"> IT REALLY COUNTS</h3>
                    <h3 class="text-xl font-bold mb-2">{{ $highlightBook->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $highlightBook->description }}</p>
                </div>
            </div>
        @else
            <p>No highlighted books available.</p>
        @endif
        </div>
    </div>

    <div class="mt-3 mb-3 border-8 p-5 ml-5 mr-5 border-blue-950">
        <h2 class="text-2xl font-bold mb-4 underline">Latest Book Reviews</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            @foreach ($latestBookReviews as $book)
                <div class="bg-white rounded-sm shadow p-4">
                    <img src="{{ $book->image }}" class="w-full h-6/12 object-cover mb-4">
                    <h3 class="text-lg font-bold mb-2">{{ $book->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ $book->description }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-3 mb-3 border-8 p-4 ml-5 mr-5 border-blue-950 ">
        <h2 class="text-2xl font-bold mb-4 underline">Book Series Review</h2>
        @if ($bookReviews->count() > 0)
            <div class="grid grid-cols-3 gap-4">
                @foreach ($bookReviews as $review)
                    <div class="border-b">
                        <img src="{{ $review->image }}" alt="{{ $review->title }}" class="w-full h-40 object-cover mb-4">
                        <h3 class="text-xl font-bold mb-2">{{ $review->title }}</h3>
                    </div>
                @endforeach
            </div>
        @else
            <p>No book series reviews available.</p>
        @endif
    </div>
@endsection
