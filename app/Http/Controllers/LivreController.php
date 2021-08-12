<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Livre::all();
        return view("welcome", compact("notes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("crudLivre.create", compact("request"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nom" => ["required", "min:3", "max:20"],
            "texte" => ["required", "max:300"],
            "note" => ["required", "gte:1", "lte:5"]
        ]);

        $store = new Livre;
        $store->nom = $request->nom;
        $store->texte = $request->texte;
        $store->note = $request->note;
        $store->save();
        return redirect("/")->with("success", "Livre bien ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Livre::find($id);
        return view("crudLivre.show", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Livre::find($id);
        return view("crudLivre.edit", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Livre::find($id);
        $update->nom = $request->nom;
        $update->texte = $request->texte;
        $update->note = $request->note;
        $update->save(); //
        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Livre  $livre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Livre::find($id);
        $destroy->delete();
        return redirect("/")->with("warning", "Livre supprimée");
    }
}
