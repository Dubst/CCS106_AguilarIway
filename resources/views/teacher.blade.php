<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher</title>
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
    @foreach($teachers as $teacher)
          <tr>
            <th scope="row">{{$teacher->id}}</th>
            <td>{{$teacher->fname}}</td>
            <td>{{$teacher->lname}}</td>
            <td>{{$teacher->address}}</td>
            <td>{{$teacher->birthdate}}</td>
            <td>{{$teacher->city}}</td>
            <td>{{$teacher->province}}</td>
            <td><a  href="/editteacher/{{$teacher->id}}"class='btn btn-primary btn-sm'>Edit</a></td>

          </tr>
          @endforeach
        </tbody>
      </table>
      @include('succes_messsage');
      <a class="btn btn-secondary" href="/dashboard" role="button">Back</a>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
