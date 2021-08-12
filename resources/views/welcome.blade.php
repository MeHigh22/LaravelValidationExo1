@extends("layouts.index")
@include("partials.messages")

@section("content")

<section>
    <div class="container p-5 d-flex flex-column justify-content-center align-items-center">
        <a href="/create" class="btn btn-primary text-white">Create</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Texte</th>
                    <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notes as $note)
                    <tr>
                        <th scope="row">{{$note->id}}</th>
                        <td>{{$note->nom}}</td>
                        <td>{{$note->texte}}</td>
                        <td>{{$note->note}}</td>
                        <td><a class="btn btn-primary text-white" href="/livre/{{$note->id}}/show">SHOW</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection
