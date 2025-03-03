<x-base-layout>
    <x-slot name="title">Login</x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    </x-slot>

    <div class="container">
        <h1>Login</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('gebruiker.authenticate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <h2>Don't have an account? Click <a href="{{ route('gebruiker.register') }}">here</a>.</h2>
    </div>
</x-base-layout>