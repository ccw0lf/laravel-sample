<Doc<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to My Laravel App</h1>
    </header>

    <main>
        <p>This is a basic HTML page served by Laravel.</p>
        <a href="{{ route('books') }}">Books</a>
        <a href="{{ route('contact') }}">Contact</a>    
    </main>
    <footer>
        <p>&copy; 2025 My Laravel App</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
