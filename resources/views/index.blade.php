<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <div class="table">
        <br>
        <a class="btn btn-primary" href="{{route("students.create")}}">Add New Student</a>
        <br>
        <br>

        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Class</th>
                <th>RollNo</th>
                <th colspan="2">Action</th>
            </tr>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->rollNo }}</td>
                    <td><a href="{{route("students.edit",$student->id)}}">Edit</a></td>
                    <td>
                        <form method="post" action="{{route("students.destroy",$student->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</body>
</html>
