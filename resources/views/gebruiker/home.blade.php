<x-base-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </x-slot>

    <h1 style="text-align: center">Welcome to the Home Page</h1>
    <p style="text-align: center">This is the content of the home page.</p>

    <div class="events">
        <h2>Upcoming Events</h2>
        <ul>
            <li>
                <h3>Concert by The Band</h3>
                <p>Date: March 1, 2025</p>
                <p>Location: Music Hall</p>
                <a href="#" class="btn">Buy Tickets</a>
            </li>
            <li>
                <h3>Comedy Night</h3>
                <p>Date: March 5, 2025</p>
                <p>Location: Comedy Club</p>
                <a href="#" class="btn">Buy Tickets</a>
            </li>
            <li>
                <h3>Art Exhibition</h3>
                <p>Date: March 10, 2025</p>
                <p>Location: Art Gallery</p>
                <a href="#" class="btn">Buy Tickets</a>
            </li>
        </ul>
    </div>
</x-base-layout>