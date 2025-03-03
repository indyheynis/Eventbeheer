<x-base-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Event</h1>
                <form action="{{ route('events.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
                    <div class="form-group>
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" name="time" id="time" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" id="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" name="location" id="location" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
        

</x-base-layout>