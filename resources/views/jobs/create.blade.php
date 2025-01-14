<x-layout>
    <x-slot name="title">Create a Job</x-slot>
<h1>Job list</h1>
<p>creating a new job title</p>

<form action="/jobs" method="post">
    @csrf
    <input type="text" name="title" placeholder="title">
    <input type="text" name="description" placeholder="description">
    <button type="submit">Submit</button>
</form>
</x-layout>
