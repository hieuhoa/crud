<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
        <strong>{{Auth::user()->email}}</strong></br>
        <a href="{{url('/main/logout'}}"></a>
    </div>
@else
    <script>window.location="/main";</script>
@endif    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
</body>
</html>

