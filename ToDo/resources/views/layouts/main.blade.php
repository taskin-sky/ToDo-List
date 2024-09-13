<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>All ToDos</title>
</head>
<body>

    <div class="bg-dark">
        <div class="container py-3">
            <div class="h1 text-white">
                ToDo List App
            </div>
        </div>
    </div>
    
    @yield('main-section')

</body>
</html>