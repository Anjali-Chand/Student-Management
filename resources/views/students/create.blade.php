<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">

<div class="container mt-5">

    <h2>Add Student</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/students" method="POST">

        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text"
       name="name"
       class="form-control"
       placeholder="Enter Name"
       value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email"
       name="email"
       class="form-control"
       placeholder="Enter Email"
       value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text"
       name="course"
       class="form-control"
       placeholder="Enter Course"
       value="{{ old('course') }}">
        </div>

        <button type="submit" class="btn btn-primary">
            Save Student
        </button>

    </form>

</div>