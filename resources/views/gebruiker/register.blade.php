<x-base-layout>
    <x-slot name="title">Register Employee</x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    </x-slot>

    <div class="container">
        <h2>Register Employee</h2>
        <form action="{{ route('gebruiker.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="employee">Employee</option>
                    <option value="manager">Manager</option>
                    <option value="administrator">Administrator</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <h2>Already have an account? Click <a href="{{route('gebruiker.login')}}">here</a>.</h2>
    </div>
</x-base-layout>