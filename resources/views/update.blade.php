<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('update-student/'.$teacher->id) }}" method="POST">
        <input type="text" name="name" value="{{$teacher->name}}">
        <input type="text" name="email" value="{{$teacher->email}}">
        <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
        <button type="submit">Update Teacher</button>
    </form>
    
</body>
</html>