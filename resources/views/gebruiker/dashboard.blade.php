<x-base-layout>
    <div class="container">
        <h1>Dashboard</h1>
        <table class="table">
            <thead>
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
</x-base-layout>