<!DOCTYPE html>
<html>
<head>
    <title> Formulario </title>
</head>
<body>
    <h1>Hola Mundo :)</h1>
    <form  action="/formulario" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="msg">
        <input type="submit">
    </form>
</body>
</html>
