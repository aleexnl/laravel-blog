<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post Form</title>
</head>
<body>
    <form method="POST" action="/post">
        @csrf
        <textarea name="post_text" id="post_text" cols="30" rows="10"></textarea>
        <br><br>
        <input type="submit" value="save">
    </form>
</body>
</html>