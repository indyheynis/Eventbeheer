<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Default Title' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff5733, #c70039);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
        header .login-btn{
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
        header .login-btn:hover {
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
    </style>
    {{ $styles ?? '' }}
</head>
<body>
    <header>
        <h1><a href="{{ route('gebruiker.home')}}">Event Ticket Website</a></h1>
        <a href="{{ route('gebruiker.login')}}" class="login-btn">Login</a>
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