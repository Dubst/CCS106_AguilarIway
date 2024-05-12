<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Enrollment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg" style="margin-top: 5rem;">
    <form class="row g-3" action="{{ route('addenroll.create')}}" method="post">
        @csrf
        <div class="col-md-6">
        <div class="form-group">
                <label for="student_id">Student:</label>
                <select name="student_id" id="student_id" class="form-control">
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student-> fname}},{{ $student-> lname }}</option>
                    @endforeach
                </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
                <label for="course_id">Course:</label>
                <select name="course_id" id="course_id" class="form-control">
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course-> course_name}}</option>
                    @endforeach
                </select>
        </div>
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Add Enrollment</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
          <a class="btn btn-secondary" href="/dashboard" role="button">Back</a>
        </div>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>