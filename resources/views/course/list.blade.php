<x-layout>
    <h1>Courses</h1>
    <ul>
        @foreach ($courses as $course)
            <li><a href="/course/{{ $course->id }}">{{ $course->name }}</a></li>
        @endforeach
    </ul>
</x-layout>