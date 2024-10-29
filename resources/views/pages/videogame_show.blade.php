@extends("layouts.app")

@section("page-title", "Show")

@section("main-content")
<main class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{$videogames->coverImage}}" class="card-img-top" alt="{{$videogames->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$videogames->title}}</h5>
            <ul>
                <li>
                    <p>Uscita in Giappone: {{$videogames->releaseYearJP}}</p>
                </li>
                <li>
                    <p>Uscita nel mondo: {{$videogames->releaseYearWW}}</p>
                </li>
                <li>
                    <p>Console: {{$videogames->console}}</p>
                </li>
            </ul>
        </div>
        </div>
</main>
@endsection
