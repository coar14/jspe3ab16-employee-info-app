<!DOCTYPE html>
<html>

<head>
    <title>Employees</title>
</head>

<body>
    <h1>Employees</h1>
    <a href="{{ route('employees.create') }}">Create New Employee</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <ul>
        @foreach ($employees as $employee)
            <li>
                <p>Name: {{ $employee->name }}</p>
                <p>Email: {{ $employee->email }}</p>
                @if ($employee->photo)
                <img src="{{ asset('storage/app/employee_photos/' . $employee->photo) }}" alt="{{ $employee->name }}" width="200">

                    <p>Image Path: {{ asset('storage/app/employee_photos/' . $employee->photo) }}</p>

                @endif
                <br>
                <a href="{{ route('employees.show', $employee->id) }}">View Details</a>
            </li>
        @endforeach
    </ul>
</body>

</html>
