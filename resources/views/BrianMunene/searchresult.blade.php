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
    <h2>Search results:</h2>
    <table>
        <thead>
            <th>Id</th>
            <th>Names</th>
            <th>Fee Paid</th>
            <th>Date</th>
        </thead>
        @foreach($fees as $fee)
            <tr>
                <td>{{$fee->id}}</td>
                <td>{{$fee->names}}</td>
                <td>{{$fee->fee_paid}}</td>
                <td>{{$fee->created_at}}</td>
            </tr>
        @endforeach
    </table>
    </body>
</html>