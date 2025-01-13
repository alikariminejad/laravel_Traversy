<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Listing</title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<ul>
    <?php foreach ($jobs as $job):?>:
        <li><?php echo $job; ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
