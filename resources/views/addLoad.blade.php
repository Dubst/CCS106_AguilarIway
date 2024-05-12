<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Teacher's load</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-lg" style="margin-top: 5rem;">
    <form class="row g-3" action="{{ route('addload.create')}}" method="post">
        @csrf
        <div class="col-md-6">
        <div class="form-group">
                <label for="teacher_id">Teacher:</label>
                <select name="teacher_id" id="teacher_id" class="form-control">
                    @foreach($teachers as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher-> fname}},{{ $teacher-> lname }}</option>
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
          <button type="submit" class="btn btn-primary">Add Course</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
          <a class="btn btn-secondary" href="/dashboard" role="button">Back</a>
        </div>
      </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>