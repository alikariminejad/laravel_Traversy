@extends('layout')

@section('content')
<h1>Available Jobs</h1>
<ul>
    @forelse($jobs as $job)
        <li>{{ $job }}</li>
    @empty
        <p>there is no job available</p>
    @endforelse
</ul>
@endsection
