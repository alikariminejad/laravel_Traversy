@extends('layout')

@section('title')
    Creating a job
@endsection

@section('content')
<h1>Job list</h1>
<p>creating a new job post</p>

<form action="/jobs" method="post">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Submit</button>
</form>
@endsection
