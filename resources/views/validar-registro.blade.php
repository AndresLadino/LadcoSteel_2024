<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('validar-registro') }}">
        @csrf
        <input type="text" id="userInput" name="name"> 
        <input type="email" id="emailInput" name="email"> 
        <input type="password" id="passwordInput" name="password"> 
        <button type="submit">Registrarse</button>
    </form>
</body>
</html>