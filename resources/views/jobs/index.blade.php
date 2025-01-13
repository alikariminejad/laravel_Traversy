<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Listing</title>
</head>
<body>
<h1>{{ $title }}</h1>
<ul>
    @forelse($jobs as $job)
        <li>{{ $job }}</li>
    @empty
        <p>there is no job available</p>
    @endforelse
</ul>
</body>
</html>
