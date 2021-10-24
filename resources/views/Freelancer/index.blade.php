<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer</title>
</head>
<body>
    <h1>Freelancer</h1>
    <ul>
        @forelse($freelances as $freelance)
            <li><a href="{{ $freelance->path() }}">Name: {{ $freelance->name }}, Email: {{ $freelance->email }}</a></li>
        @empty
            <li>No Freelancer yet..</li>
        @endforelse
    </ul>

    <a href="/freelancers/create">Create new</a>
</body>
</html>