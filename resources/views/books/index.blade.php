{{-- resources/views/books/index.blade.php --}}
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة الكتب</title>
</head>
<body>
    <h1>قائمة الكتب</h1>
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <ul>
        @foreach($books as $book)
            <li>{{ $book->title }} - {{ $book->author }}</li>
        @endforeach
    </ul>
</body>
</html>
