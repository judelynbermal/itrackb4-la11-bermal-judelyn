<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'My Food Products')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-4">

        <h1 class="mb-3">Judelyn's Food Products</h1>
        <p>Created by: Judelyn Z. Bermal</p>

        @include('partials._nav')

        <hr>

        @yield('content')

    </div>
</body>
</html>