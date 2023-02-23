<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="text-center">
    <h1>Hello World</h1>
    <ul>
        <li><a href="{{ route('home') }}">home</a></li>
        <li><a href="{{ route('news') }}">news</a></li>
        <li><a href="{{ route('contact') }}">contact</a></li>
        <li><a href="{{ route('support') }}">support</a></li>
    </ul>
</body>
</html>