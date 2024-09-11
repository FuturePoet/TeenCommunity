@extends('layout')

@section('title', 'Books')

@section('content')
<div class="container mx-auto p-6 flex flex-col items-center">
    <div class="slider">
        <div class="slides">
            <!-- Slider images -->
        </div>
    </div>
</div>

<section class="container mx-auto py-8">
    <h2 class="text-3xl font-bold text-center mb-6">Books</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        @forelse ($books as $book)
        <div class="bg-white p-4 shadow-md">
            <img src="{{ $book->image_url }}" alt="{{ $book->title }}" class="w-full h-32 object-cover mb-4">
            <h3 class="text-xl font-semibold">{{ $book->title }}</h3>
            <p class="text-gray-700">{{ $book->description }}</p>
            <a href="{{ $book->link }}" class="text-blue-600 hover:underline">Read</a>
        </div>
        @empty
        <p>No books available.</p>
        @endforelse
    </div>
</section>
@endsection
