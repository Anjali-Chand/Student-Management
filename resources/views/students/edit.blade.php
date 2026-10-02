<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

<div class="container mt-5">

    <h2>Edit Student</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students/{{ $student->id }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
                   name="name"
                   value="{{ $student->name }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
                   name="email"
                   value="{{ $student->email }}"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text"
                   name="course"
                   value="{{ $student->course }}"
                   class="form-control">
        </div>

        <button type="submit" class="btn btn-success">
            Update Student
        </button>

        <a href="/students" class="btn btn-secondary">
            Back
        </a>

    </form>

</div>