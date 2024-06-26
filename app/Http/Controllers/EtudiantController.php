<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('Etudiant.index', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $etudiant = Etudiant::find($id);
        $classe = $etudiant->classe;
        $formation = $classe->formation;
        $av = $etudiant->formations;
        return  view('Etudiant.show', compact('etudiant', 'classe', 'formation', 'av'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $etudiant = Etudiant::find($id);
        $classe = $etudiant->classe;
        $idFind = Classe::where('idc', '!=', $classe->idc)->orderBy('idc')->get('idc');
        return view('Etudiant.edit', compact('classe', 'idFind', 'etudiant'));
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->classe->idc = $request->idc;
        $etudiant->save();
        return redirect()->route('etudiants.index')->with('success', 'Modification avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
