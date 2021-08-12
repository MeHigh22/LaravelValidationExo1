@extends("layouts.index")


@section("content")

<section>
        <div class="container p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Texte</th>
                        <th scope="col">Note</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{$show->id}}</th>
                        <td>{{$show->nom}}</td>
                        <td>{{$show->texte}}</td>
                        <td>{{$show->note}}</td>
                        <td><a class="btn btn-dark text-white" href="/">RETOUR</a></td>
                        <td>
                            <form action="/livre/{{$show->id}}/delete" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn bg-danger text-white" type="submit">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a class="btn btn-primary text-white" href="/livre/{{$show->id}}/edit">EDIT</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@endsection
