<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Lisia Zahwa Alifa' }}</title>

    <meta
        name="description"
        content="Personal portfolio of Lisia Zahwa Alifa, an Informatics student at Universitas Negeri Padang."
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @yield('content')

</body>
</html>