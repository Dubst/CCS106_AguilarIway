<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg" style="margin-top: 5rem;">
    <form class="row g-3" action="{{ route('addCourse.create')}}" method="post">
        @csrf
        <div class="col-md-6">
          <label for="code" class="form-label">Code</label>
          <input type="name" class="form-control" id="code" name="code" value="{{$courses->code}}" required>
        </div>
        <div class="col-md-6">
          <label for="course_name" class="form-label">Course Name</label>
          <input type="name" class="form-control" id="course_name" name="course_name" value="{{$courses->course_name}}" required>
        </div>
        <div class="col-12">
          <label for="location" class="form-label">Location</label>
          <input type="text" class="form-control" id="locaiton" placeholder="room/building" name="location" value="{{$courses->location}}" required>
        </div>
        <div class="col-md-6">
            <label for="schedule" class="form-label">Schedule</label>
            <input type="name" class="form-control" id="schedule" name="schedule" value="{{$courses->schedule}}" required>
        </div>
        <div class="col-md-6">
          <label for="unit" class="form-label">Unit</label>
          <input type="name" class="form-control" id="unit" name="unit" value="{{$courses->unit}}" required>
        </div>
        <div class="col-md-4">
          <label for="section" class="form-label">Section</label>
          <input type="text" class="form-control" id="section" name="section" value="{{$courses->section}}" required>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add Course</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
          <a class="btn btn-secondary" href="/dashboard" role="button">Back</a>
        </div>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>