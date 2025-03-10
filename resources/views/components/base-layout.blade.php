<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        html {
            overflow-x: hidden;
        }

        body {
            font-family: 'Bahnschrift', cursive;
            background: linear-gradient(to right, #ff5733, #c70039);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-size: 16px;
            overflow-x: hidden;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        header a {
            color: white;
            text-decoration: none;
            transition: color 0.3s, text-shadow 0.3s;
        }

        header a:hover {
            color: #ff5733;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        header .login-btn,
        header .logout-btn {
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);
            padding: 10px 20px;
            background-color: #ff5733;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }

        header .login-btn:hover,
        header .logout-btn:hover {
            background-color: #c70039;
            transform: scale(1.1) translateY(-50%);
        }

        main {
            flex: 1;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ff5733;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: #ff5733;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn:hover {
            background-color: #c70039;
            transform: scale(1.05);
        }

        .events ul {
            list-style: none;
            padding: 0;
        }

        .events li {
            background-color: white;
            margin: 10px 0;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .events li:hover {
            transform: translateY(-5px);
        }

        .events h3 {
            margin: 0;
            color: #ff5733;
        }

        h2 {
            color: #ff5733;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 10px;
            color: white;
            background-color: #ff5733;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #c70039;
            transform: scale(1.05);
        }

        .table-reponsive {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-toggle {
            cursor: pointer;
            padding: 10px 20px;
            background-color: #ff5733;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-menu a,
        .dropdown-menu .dropdown-item {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }

        .dropdown-menu a:hover,
        .dropdown-menu .dropdown-item:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu .delete-item {
            color: red;
        }

        .delete-item {
            color: red;
            background: none;
            border: none;
            cursor: pointer;
            padding: 12px 16px;
            text-align: left;
            width: 100%;
            font-family: inherit;
            /* Ensure the font matches the rest of the text */
            font-size: inherit;
            /* Ensure the font size matches the rest of the text */
        }

        .delete-item:hover {
            background-color: #f1f1f1;
        }
    </style>
    {{ $styles ?? '' }}
</head>
<body>
    <header>
        <h1><a href="{{ route('gebruiker.home')}}">Event Ticket Website</a></h1>
        @if (Auth::check())
            <p>User is logged in</p>
            <form action="{{ route('gebruiker.logout')}}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        @else
            <p>User is not logged in</p>
            <a href="{{ route('gebruiker.login')}}" class="login-btn">Login</a>
        @endif

        <div class="dropdown">
            <button class="dropdown-toggle">Events</button>
            <div class="dropdown-menu">
                <a href="{{ route('events.create') }}" class="dropdown-item">Create</a>
                <a href="{{ route('events.index') }}" class="dropdown-item">Overzicht</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-toggle">Tickets</button>
            <div class="dropdown-menu">
                <a href="{{ route('tickets.create') }}" class="dropdown-item">Create</a>
                <a href="{{ route('tickets.index') }}" class="dropdown-item">Overzicht</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropdown-toggle">Orders</button>
            <div class="dropdown-menu">
                <a href="{{ route('profile.create') }}" class="dropdown-item">Profile</a>
                <a href="{{ route('profile.edit') }}" class="dropdown-item">Edit</a>
            </div>

    </header>

    <main>
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Event Ticket Website. All rights reserved.</p>
    </footer>
</body>

</html>