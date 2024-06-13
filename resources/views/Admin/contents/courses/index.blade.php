@extends('admin.main')
@section('content')
<div class="pagetitle">
    <h1>Course</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Pages</li>
        <li class="breadcrumb-item active">Student</li>
        <li class="breadcrumb-item active">Course</li>
      </ol>
    </nav>
  </div>

  <section class="section">
    <div class="card">
        <div class="card-body">
          <a href="/admin/course/create" class="btn btn-primary my-2">+ Course</a>
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Timestamp</th>
                </tr>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->category }}</td>
                        <td>{{ $course->desc }}</td>
                        <td>{{ $course->Timestamp }}</td>
                        <td>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
  </section>
@endsection
