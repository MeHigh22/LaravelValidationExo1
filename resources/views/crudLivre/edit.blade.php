@extends('template.index')
@include('partials.message')

@section('content')
    <section>
        <div class="container p-5">
            <form action="/livre/{{$edit->id}}/update" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="card-title" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" value="{{$edit->nom}}" id="card-title" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="card-texte" class="form-label">Texte</label>
                    <input type="text" class="form-control" name="texte" value="{{$edit->texte}}" id="card-texte">
                </div>
                <div class="mb-3">
                    <label for="card-title" class="form-label">Note</label>
                    <input type="text" class="form-control" name="note" value="{{$edit->note}}" id="card-title" aria-describedby="emailHelp">
                </div>
                <form action="/livre/{{$edit->id}}/update" method="POST">
                    @csrf
                    @method("PUT")
                    <button class="btn btn-secondary text-white" type="submit">UPDATE</button>
                </form>
            </form>
        </div>
    </section>
@endsection
