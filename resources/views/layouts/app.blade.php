<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Marsha Hafiz Devara</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

     @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>