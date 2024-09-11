<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teen Profile</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <h1>Teen Profile</h1>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('courses.index') }}">Courses</a></li>
                <li><a href="{{ route('events.index') }}">Events</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="profile-info">
            <h2>Profile Information</h2>
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </section>

        <section class="enrollments">
            <h2>Enrolled Courses</h2>
            @if($courses->isEmpty())
                <p>You are not enrolled in any courses.</p>
            @else
                <ul>
                    @foreach($courses as $course)
                        <li>{{ $course->title }} - {{ $course->description }}</li>
                    @endforeach
                </ul>
            @endif
        </section>

        <section class="events">
            <h2>Registered Events</h2>
            @if($events->isEmpty())
                <p>You have not registered for any events.</p>
            @else
                <ul>
                    @foreach($events as $event)
                        <li>{{ $event->name }} - {{ $event->date }}</li>
                    @endforeach
                </ul>
            @endif
        </section>

        <section class="reviews">
            <h2>Your Reviews</h2>
            @if($reviews->isEmpty())
                <p>You have not written any reviews yet.</p>
            @else
                <ul>
                    @foreach($reviews as $review)
                        <li>
                            <strong>{{ $review->course->title }}</strong>: {{ $review->content }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </section>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Teen Community. All rights reserved.</p>
    </footer>
</body>
</html>
