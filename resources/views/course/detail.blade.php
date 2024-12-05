<x-layout>
    <h1>{{ $course->name }}</h1>
    <p>{{ $course->description }}</p>
    <x-figure src="test.png">{{ $course->name }}</x-figure>
</x-layout>