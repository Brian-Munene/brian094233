<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/app.css')}}" />
    <script src="main.js"></script>
</head>
<body>
     @include ('nav')
    <h1>Select which module you would like to view:</h1>
    <a href="/students">Students</a><br><br>
    <a href="/fees">Fees</a>
    
</body>
</html>