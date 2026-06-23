<?php

namespace App\Http\Controllers;

use App\Models\Nounous;
use App\Models\Client;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function create()
    {
        return view('profile.create');
    }

    public function recherche()
    {
        return view('rechercher.create');
    }
    public function store(Request $request)
    {
        // $validated = $request->validate([
        //     'first_name' => 'required|max:255',
        //     'last_name' => 'required|max:255',
        //     'address' => 'required|max:255',
        //     'phone_number' => 'required|max:255|unique:maids'
        // ]);


        $fileName = $request->file("piece_identite")->getClientOriginalName();
       // dd($request->input());

        $type = $request->piece_identite->getClientMimeType();
        $size = $request->piece_identite->getSize();

        $request->piece_identite->move(public_path('fichiers'), $fileName);
        $request->piece_identite =  $fileName;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $telephone = $request->telephone;
        $piece_identite = $fileName;
        $lieu_residence = $request->lieu_residence;
        $status = $request->status;

        Nounous::create(["nom"=>$nom,"prenom"=>$prenom,"telephone"=>$telephone,"piece_identite"=>$piece_identite,"lieu_residence"=>$lieu_residence,"status"=>$status]);

        // session()->flash('message', 'Votre profile a été crée avec succès.');
        notify()->success('Votre enregistrement a été effectué avec succès.', 'enregistrement effectué');
        return redirect('/')->with('success', 'Votre enregistrement a été effectué avec succes!');;
    }
    public function store2(Request $request)
    {


        $fileName = $request->file("piece_identite")->getClientOriginalName();
    //    dd($request->input());

        $type = $request->piece_identite->getClientMimeType();
        $size = $request->piece_identite->getSize();

        $request->piece_identite->move(public_path('fichiers'), $fileName);
        $request->piece_identite =  $fileName;
        $nom = $request->nom;
        $prenom = $request->prenom;
        $telephone = $request->telephone;
        $piece_identite = $fileName;
        $lieu_residence = $request->lieu_residence;
        $type_nounou = $request->type_nounous;
        $type_auxi = $request->type_auxiliaire;

        // dd($request->input());
        Client::create(["nom"=>$nom,"prenom"=>$prenom,"telephone"=>$telephone,"type_nounous"=>$type_nounou,"type_auxiliaire"=>$type_auxi,"piece_identite"=>$piece_identite,"lieu_residence"=>$lieu_residence,]);
        notify()->success('Votre enregistrement a été effectué avec succès. ', 'enregistrement effectué');
        // session()->flash('message', 'Votre profile a été crée avec succès.');

        return redirect('/');
    }

}
