<!-- filepath: c:\Users\Luca Wijsman\Herd\Eventbeheer\resources\views\events\edit.blade.php -->
<x-base-layout>
    <x-slot name="title">Edit Event</x-slot>

    <div class="container">
        <h1>Edit Event</h1>
        <form action="{{ route('events.update', $event->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Event Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $event->name }}" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $event->date }}" required>
            </div>

            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" name="time" id="time" class="form-control" value="{{ $event->time }}" required>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location" class="form-control" value="{{ $event->location }}" required>
            </div>

            <div class="form-group">
                <label for="ticket_count">Ticket Count</label>
                <input type="number" name="ticket_count" id="ticket_count" class="form-control" value="{{ $event->ticket_count }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $event->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Event</button>
        </form>
    </div>
</x-base-layout>