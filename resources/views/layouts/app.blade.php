<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>
    @yield("title")

    </title>
</head>
<body>
    <h1>Gestion de bodegas</h1>
    <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi provident iure iusto, odio totam distinctio voluptates sunt atque, at vero aliquam assumenda consequuntur nihil doloremque rerum esse perspiciatis porro officia.</h4>
    @include('layouts._partials.messages')
    @yield("content")
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>