<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

<div class="container mt-5">

    <h2>Students List</h2>

    <a href="/students/create" class="btn btn-primary mb-3">
        Add Student
    </a>

    <table class="table table-bordered table-striped">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        @foreach($students as $student)

        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->course }}</td>

            <td>

                <a href="/students/{{ $student->id }}/edit"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="/students/{{ $student->id }}"
                      method="POST"
                      style="display:inline;">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                     class="btn btn-danger btn-sm"
                     onclick="return confirm('Are you sure?')">
                         Delete
                   </button>

                </form>

            </td>
        </tr>

        @endforeach

    </table>

</div>