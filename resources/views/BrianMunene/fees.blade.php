<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fees</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <script src="main.js"></script>
    <style>
        form{

             margin-top: 40px;
              margin-left: 550px;
              padding:20px;
        }
    </style>
</head>
<body>
     @include ('nav')
    <form method="post" action="/feesresult" align="center">
        {{csrf_field()}}
        <h4>Search for student using the id:</h4>
    <input type="text" name="search" required>
    <input type="submit" value="Search"><br>
    </form>
    <form   method="POST" action="/fees/save">
        {{csrf_field()}}
    <div class="form-group">
    <h2>Fees Payments</h2><br>
    <label>Student ID</label><br>
    <input type ="text" name="id" required><br>
    <label>Student Name</label><br>
    <input type ="text" name="names" required><br>
    <label>Amount Paid</label><br>
    <input type="text" name="fee_paid" required><br><br>
    <input type="submit" value="Submit"> 
    </div>
        @if(session()->has('message'))
        {{session()->get('message')}}
        @endif
    </form>
</body>
</html>