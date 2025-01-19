<x-layout>
    <x-slot name="title">index</x-slot>
<h1>Available Jobs</h1>
<ul>
    @forelse($jobs as $job)
        <li><a href="{{route('jobs.show', $job->id)}}">{{ $job->title }}</a> - {{$job->description}}</li>
    @empty
        <p>there is no job available</p>
    @endforelse
</ul>
</x-layout>
