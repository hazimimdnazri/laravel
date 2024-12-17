<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized</title>
</head>
<body>
    <h1>Unauthorized</h1>
    <p>{{ $exception->getMessage() }}</p>

    <a href="{{ url('/') }}"><button>Back to Home</button></a>
</body>
</html>