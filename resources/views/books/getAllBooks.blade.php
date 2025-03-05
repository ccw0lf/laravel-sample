<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h1>Books</h1>
    <form action="{{ route('books.create') }}" method="post">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title">
        <input type="text" name="isbn" id="isbn">
        <button type="submit">Add Book</button>
    <ul>
        @foreach ($books as $book)
            <li>{{ $book->title }}</li>
        @endforeach
    </ul>
 
</div>
