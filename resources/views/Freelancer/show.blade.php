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
    <p>{{ $freelancer->name }}</p>
    <p>{{ $freelancer->email }}</p>
    <p>{{ $freelancer->phone }}</p>
    <p>{{ $freelancer->address }}</p>
    <p>{{ $freelancer->skills }}</p>
    <p>{{ $freelancer->profile }}</p>
    <p>{{ $freelancer->currency }}</p>
    <p>{{ $freelancer->rate }}</p>
    <p>{{ $freelancer->converted }}</p>
    
    
    <a href="{{ $freelancer->path()}}">Local</a>
    &nbsp; | &nbsp;
    <a href="{{ $freelancer->path()}}?external=true">External</a>

    <br />
    <a href="/freelancers">Freelancers Lists</a>


</body>
</html>