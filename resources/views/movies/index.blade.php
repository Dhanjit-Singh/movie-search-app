<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Search App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Movie Search App</h2>

        <form action="{{ route('movies.search') }}" method="GET" class="d-flex justify-content-center my-4">
            <input type="text" name="query" class="form-control w-50" placeholder="Enter movie title"
                value="{{ $query ?? '' }}" required>
            <button type="submit" class="btn btn-primary ms-2">Search</button>
        </form>

        @if (session('error'))
            <div class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif

        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ $movie['Poster'] }}" class="card-img-top" alt="{{ $movie['Title'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $movie['Title'] }}</h5>
                            <p class="card-text">{{ $movie['Year'] }}</p>
                            <a href="{{ route('movies.details', $movie['imdbID']) }}" class="btn btn-primary">View
                                Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>
