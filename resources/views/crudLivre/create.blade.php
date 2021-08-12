@extends('layouts.index')
@include('partials.messages')

@section('content')
    <section>
        <div class="container">
            <form class="d-flex flex-column" action="/livres" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="{{old("nom")}}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="texte" class="form-label">Texte</label>
                    <input type="text" class="form-control" id="texte" name="texte" value="{{old("texte")}}" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note sur 5</label>
                    <input type="number" class="form-control" id="note" name="note" value="{{old("note")}}" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Ajout</button>
            </form>
        </div>
    </section>
@endsection
