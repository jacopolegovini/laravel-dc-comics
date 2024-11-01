@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <h1>
        Videogame
    </h1>
    <div class="btn btn-primary"><a href="videogame/create">Create a new Kingdom Hearts game</a></div>
    <div class="list-card d-flex">
        @forelse ($videogames as $key=>$videogame)
        <a href="videogame/{{$key + 1}}">
            <div class="card" style="width: 18rem;">
                <img src="{{$videogame->coverImage}}" class="card-img-top" alt="{{$videogame->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{$videogame->title}}</h5>
                    <ul>
                        <li>
                            <p>Uscita in Giappone: {{$videogame->releaseYearJP}}</p>
                        </li>
                        <li>
                            <p>Uscita nel mondo: {{$videogame->releaseYearWW}}</p>
                        </li>
                        <li>
                            <p>Console: {{$videogame->console}}</p>
                        </li>
                    </ul>
                </div>
                <div class="btn-list d-flex justify-content-center gap-3">
                    <div class="btn btn-secondary"><a href="videogame/{{$videogame->id}}/edit">Update</a></div>

                    <form action="{{route('videogame.delete', $videogame->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </a>
        @empty
        <p>La lista dei videogiochi è vuota.</p>
        @endforelse
    </div>
    <button class="btn btn-danger delete-button" type="submit">test</button>
</main>

@endsection

@section('additional-scripts')
@vite("resources/js/confirmation-delete.js")
@endsection
