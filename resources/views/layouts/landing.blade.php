<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield("stilos")
    <title>
        @yield("titulo")
    </title>
</head>
<body>
    @include("layouts._partials.menu")
    @yield("cuerpo")
    @yield("scripts")
</body>
</html>