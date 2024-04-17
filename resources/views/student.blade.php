<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Birthdate</th>
            <th scope="col">City</th>
            <th scope="col">Province</th>

          </tr>
        </thead>
    @foreach($hd_students as $hd_student)
        <tr>
            <th scope="row">{{$hd_student['id']}}</th>
            <td>{{$hd_student['fname']}}</td>
            <td>{{$hd_student['lname']}}</td>
            <td>{{$hd_student['address']}}</td>
            <td>{{$hd_student['birthdate']}}</td>
            <td>{{$hd_student['city']}}</td>
            <td>{{$hd_student['province']}}</td>

          </tr>
    @endforeach
    @foreach($students as $student)
          <tr>
            <th scope="row">{{$student->id}}</th>
            <td>{{$student->fname}}</td>
            <td>{{$student->lname}}</td>
            <td>{{$student->address}}</td>
            <td>{{$student->birthdate}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->province}}</td>

          </tr>
          @endforeach
        </tbody>
      </table>
      @include('succes_messsage');
      <a class="btn btn-secondary" href="/dashboard" role="button">Back</a>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
