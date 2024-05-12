<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

        h1{
          margin: auto;
        }
      </style>
</head>




<body>
    <h1 style="margin: 1rem; text-align:center">Simple Enrollment System</h1>
    <div class="container text-center m-5">
        <div class="row">
        <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Course
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/course">List</a></li>
                  <li><a class="dropdown-item" href="/addcourse">Add</a></li>

                </ul>
              </div>
          </div>
          <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Student
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/student">List</a></li>
                  <li><a class="dropdown-item" href="/addstudent">Add</a></li>

                </ul>
              </div>
          </div>
          <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Teacher
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/teacher">List</a></li>
                  <li><a class="dropdown-item" href="/addteacher">Add</a></li>

                </ul>
              </div>
          </div>
          <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Teacher's Load
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/load">List</a></li>
                  <li><a class="dropdown-item" href="/addload">Add</a></li>

                </ul>
              </div>
          </div>
          <div class="col">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                 Enrollment
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/enroll">List</a></li>
                  <li><a class="dropdown-item" href="/addenroll">Add</a></li>

                </ul>
              </div>
          </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
