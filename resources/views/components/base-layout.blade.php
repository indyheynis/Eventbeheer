<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Eventbeheer</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        header{
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav{
            background-color: #444;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav a{
            color: #fff;
            text-decoration: none;
            padding: 0 10px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('gebruiker.home') }}">Home</a>
            <a href="{{ route('events.index') }}">Events</a>
            <a href="{{ route('events.create') }}">Create Event</a>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p>&copy; {{date('Y')}} - Eventbeheer</p>
    </footer>
</body>
</html>