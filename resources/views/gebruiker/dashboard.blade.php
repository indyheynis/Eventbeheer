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
                            <td class="dropdown">
                                <span class="dropdown-toggle">{{ $gebruiker->name }}</span>
                                <div class="dropdown-menu">
                                    <a href="{{ route('gebruiker.edit', $gebruiker->id) }}" class="dropdown-item">Edit</a>
                                    <form action="{{ route('gebruiker.delete', $gebruiker->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item delete-item">Delete</button>
                                    </form>
                                </div>
                            </td>
                            <td>{{ $gebruiker->email }}</td>
                            <td>{{ $gebruiker->role }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </x-slot>
</x-base-layout>