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
    <form method="post" action="{{ route('students.store') }}">
        @csrf
        <input type="text" placeholder="Enter student name" name="name" required>
        <input type="text" placeholder="Enter student class name" name="class" required>
        <input type="text" placeholder="Enter student roll no" name="rollNo" required>
        <input type="submit" value="Add Student">
    </form>
</div>
</body>
</html>
