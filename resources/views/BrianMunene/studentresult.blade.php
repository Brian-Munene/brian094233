<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <script src="main.js"></script>
    <style>
        table {
              margin-top: 40px;
              margin-left: 40px;
              padding:20px;
        }
        td{
             text-align: center;
            border: black;
            border-style: solid;
            font-size: 18px;
            padding:5px;
            font-family: 'Times New Roman', Times, serif;
        }
        tr{
              border: black;
             padding: 20px;
             text-align: center;   
        }
        
    </style>
</head>
<body>
    @include ('nav')
    <table>
    <thead>
    <tr>
    <th>Names</th>
    <th>Id</th>
    <th>Course</th>
    <th>Fee Amount</th>
    </tr>
    </thead>
        @foreach($students as $student)
            <tr>
                <td>{{$student->names}}</td>
                <td>{{$student->id}}</td>
                <td>{{$student->course}}</td>
                <td>{{$student->fees}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>