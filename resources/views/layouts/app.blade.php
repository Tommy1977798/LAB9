<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Lab')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
     <h1>Laravel Blade Lab</h1>
     @include('partials.nav')
    </header>
    <main>
     <div class="container">
        @yield('content')
     </div>
    </main>
    <footer>
        <p>&copy; 2025 Laravel Lab by Tommy</p>
    </footer>

</body>
</html>
