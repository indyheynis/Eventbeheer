<!-- filepath: c:\Users\hidde\Herd\Eventbeheer\resources\views\gebruiker\edit.blade.php -->
<x-base-layout>
    <div class="container">
        <h1>Edit User</h1>
        <form action="{{ route('gebruiker.update', $gebruiker->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $gebruiker->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $gebruiker->email }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                <small class="form-text text-muted">Leave blank if you do not want to change the password.</small>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="employee" {{ $gebruiker->role === 'employee' ? 'selected' : '' }}>Employee</option>
                    <option value="host" {{ $gebruiker->role === 'host' ? 'selected' : '' }}>Host</option>
                    <option value="manager" {{ $gebruiker->role === 'manager' ? 'selected' : '' }}>Manager</option>
                    <option value="customer" {{ $gebruiker->role === 'customer' ? 'selected' : '' }}>Customer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</x-base-layout>