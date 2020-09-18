<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apprenant;

class ApprenantsController extends Controller
{
    Public function index(){ 
        $apprenants= Apprenant::all();
        return view('index',compact('apprenants'));
    }

    Public function create(){
        return view('apprenant');
    }

    Public function store(Request $request){
        Apprenant::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'date_de_naissance'=>$request->date_de_naissance,
            'sexe'=>$request->sexe,
            'ville'=>$request->ville,
            'formation'=>$request->formation,
            'etablissement'=>$request->etablissement,
            'contact'=>$request->contact,
            'email'=>$request->email,
            'contact_tuteur'=>$request->contact_tuteur,
        ]);
            return redirect()->route('index_apprenant');
    }

    Public function show(Request $request, Apprenant $apprenant){
        return view('showApprenant',compact('apprenant'));

    }


    Public function destroy(Apprenant $apprenant){
        $apprenant->delete();
        return redirect()->route('index_apprenant');
    }

    Public function edit(Apprenant $apprenant,Request $request){
        return view('editApprenant',compact('apprenant'));
    }

    Public function update(Apprenant $apprenant, Request $request){

        $apprenant->update($request->all());
        // Apprenant::update([
        //     'nom'=>$request->nom,
        //     'prenom'=>$request->prenom,
        //     'date_de_naissance'=>$request->date_de_naissance,
        //     'sexe'=>$request->sexe,
        //     'ville'=>$request->ville,
        //     'formation'=>$request->formation,
        //     'etablissement'=>$request->etablissement,
        //     'contact'=>$request->contact,
        //     'email'=>$request->email,
        //     'contact_tuteur'=>$request->contact_tuteur,
        // ]);
        return redirect()->route('index_apprenant');
    }
}


