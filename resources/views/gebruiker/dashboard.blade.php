<x-base-layout>
    <x-slot name="title">Dashboard</x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    </x-slot>

    <div class="container">
        <h1>Dashboard</h1>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gebruikers as $gebruiker)
                        <tr>
                            <td>{{ $gebruiker->name }}</td>
                            <td>{{ $gebruiker->email }}</td>
                            <td>{{ $gebruiker->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-base-layout>