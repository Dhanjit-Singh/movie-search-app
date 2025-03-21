<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie['Title'] }} - Movie Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('movies.search') }}" class="btn btn-secondary mb-3">Back to Search</a>
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $movie['Poster'] }}" class="img-fluid" alt="{{ $movie['Title'] }}">
            </div>
            <div class="col-md-8">
                <h2>{{ $movie['Title'] }}</h2>
                <p><strong>Year:</strong> {{ $movie['Year'] }}</p>
                <p><strong>Rated:</strong> {{ $movie['Rated'] }}</p>
                <p><strong>Released:</strong> {{ $movie['Released'] }}</p>
                <p><strong>Genre:</strong> {{ $movie['Genre'] }}</p>
                <p><strong>Director:</strong> {{ $movie['Director'] }}</p>
                <p><strong>Actors:</strong> {{ $movie['Actors'] }}</p>
                <p><strong>Plot:</strong> {{ $movie['Plot'] }}</p>
                <p><strong>IMDb Rating:</strong> {{ $movie['imdbRating'] }}/10</p>
            </div>
        </div>
    </div>
</body>

</html>
