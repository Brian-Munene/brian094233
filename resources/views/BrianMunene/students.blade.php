<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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
   <form action="/students/save"  method="POST" >
   {{csrf_field()}}
   <h2>Register Student</h2> <br>
   @if(session()->has('message'))
  {{session()->get('message')}}
  @endif
  <br>
   <label>Names</label><br>
   <input type="text" name="names"required><br>
   <label>Admission Number</label><br>
   <input type="text" name="id" required><br>
   <label>Course Enrolled</label><br>
   <input type="text" name="course" required><br>
   <label>Fees Amount</label><br>
   <input type="text" name="fees" required><br>
   <input type="submit" value="Submit"><br>
   
   </form> 
   
</body>
</html>