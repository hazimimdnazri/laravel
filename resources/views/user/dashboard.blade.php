<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <a href="{{ route('logout') }}"><button>Logout</button></a>
    <a href="{{ url('user/allowed') }}"><button>You can enter this</button></a>
    <a href="{{ url('user/not-allowed') }}"><button>You cannot enter this</button></a>
    <a href="{{ url('game/add') }}"><button>Add Games</button></a>
    <a href="{{ url('task') }}"><button>Tasks</button></a>
</body>
</html>