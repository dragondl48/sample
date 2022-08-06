<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add</h1>
    <form method="POST" action="<?php echo route('categories.add'); ?>">
        <input type="text" name="categoryName" placeholder="Add Name">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <button type="submit">OK</button>

    </form>
    
</body>
</html>