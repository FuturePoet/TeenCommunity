@extends('layout')

@section('title', 'Events')

@section('content')
<div class="container mx-auto p-6 flex flex-col items-center">
    <div class="slider">
        <div class="slides">
            <div class="slide"><img src="https://th.bing.com/th/id/R.f751da008f5e3d20775d609b8eaa2bb2?rik=kDNsZLKCkcVEGg&pid=ImgRaw&r=0" alt="Events and activity" class="w-full" /></div>
            <div class="slide"><img src="https://th.bing.com/th/id/OIP.lKZEvi5FVDDmG-mB65j6YQHaE8?rs=1&pid=ImgDetMain" alt="About events" class="w-full" /></div>
            <div class="slide"><img src="https://th.bing.com/th/id/OIP.UE7lt7mhmYXj1WD46V1z-AHaEK?w=290&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Teens' community" class="w-full" /></div>
            <div class="slide"><img src="https://m.media-amazon.com/images/S/aplus-media/kdp/63ff8b38-841f-4dfb-851f-bd3b950cd3fb.__CR0,0,300,300_PT0_SX300_V1___.png" alt="Book about teens" class="w-full" /></div>
            <div class="slide"><img src="https://th.bing.com/th/id/OIP.TmgQx9FtGpkUK6L4lwr0VgHaE6?rs=1&pid=ImgDetMain" alt="teens is the future" class="w-full" /></div>
        </div>
    </div>
</div>

<section class="container mx-auto py-8">
    <h2 class="text-3xl font-bold text-center mb-6">Events & Activities</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
        @foreach ($events as $event)
        <div class="bg-white p-4 shadow-md">
            <img src="{{ $event->image_url }}" alt="{{ $event->title }}" class="w-full h-32 object-cover mb-4">
            <h3 class="text-xl font-semibold">{{ $event->title }}</h3>
            <p class="text-gray-700">{{ $event->description }}</p>
            <a href="{{ $event->link }}" class="text-blue-600 hover:underline">Join Now</a>
        </div>
        @endforeach
    </div>
</section>
@endsection
