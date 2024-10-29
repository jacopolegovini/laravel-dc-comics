@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <form action="{{route('videogame.store')}}" method="POST">
        @csrf

            <h1 class="mb-3">
                Creating a new Kingdom Hearts Game:
            </h1>
            <div class="mb-3">
                <label for="videogame-title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="videogame-title" name="title">
            </div>
            <div class="mb-3">
                <label for="videogame-releaseYearJP" class="form-label">Uscita in Giappone:</label>
                <input type="text" class="form-control" id="releaseYearJP" name="releaseYearJP">
            </div>
            <div class="mb-3">
                <label for="videogame-releaseYearWW" class="form-label">Uscita nel mondo:</label>
                <input type="text" class="form-control" id="releaseYearWW" name="releaseYearWW">
            </div>
            <div class="mb-3">
                <label for="videogame-console" class="form-label">Console:</label>
                <input type="text" class="form-control" id="videogame-console" name="console">
            </div>

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create new Kingdom Hearts Game
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
    </form>
</main>
@endsection
