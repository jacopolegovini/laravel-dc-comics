@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{route('videogame.store')}}" method="POST">
        @csrf

            <h1 class="mb-3">
                Creating a new Kingdom Hearts Game:
            </h1>
            <div class="mb-3">
                <label for="videogame-title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="videogame-title" name="title" value="{{(strlen(old('title')) >= 3) ? old('title') : ""}}">
                @dump(old('title'))
            </div>
            <div class="mb-3">
                <label for="videogame-releaseYearJP" class="form-label">Uscita in Giappone:</label>
                <input type="text" class="form-control" id="releaseYearJP" name="releaseYearJP" value="{{old('releaseYearJP')}}">
            </div>
            <div class="mb-3">
                <label for="videogame-releaseYearWW" class="form-label">Uscita nel mondo:</label>
                <input type="text" class="form-control" id="releaseYearWW" name="releaseYearWW" value="{{old('releaseYearWW')}}">
            </div>
            <div class="mb-3">
                <label for="videogame-console" class="form-label">Console:</label>
                <input type="text" class="form-control" id="videogame-console" name="console" value="{{old('console')}}">
            </div>
            <div class="mb-3">
                <label for="videogame-coverImage" class="form-label">Url image cover:</label>
                <input type="text" class="form-control" id="videogame-coverImage" name="coverImage" value="{{old('coverImage')}}">
            </div>

            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Create
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset fields
                </button>
            </div>
    </form>
</main>
@endsection
