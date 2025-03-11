<x-layout>
    <x-slot name="title">index</x-slot>
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
    @forelse($jobs as $job)
        <x-job-card :job="$job" />
    @empty
        <p>there is no job available</p>
    @endforelse
</div>
{{$jobs->links()}}
</x-layout>
