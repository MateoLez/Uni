<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AllController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('registro', compact('users'));
    }


    public function create()
    {
        // QrCode::format('svg')
        //                     ->errorCorrection('L')
        //                     ->color(255, 255, 255)
        //                     ->backgroundColor(255, 255, 255, 0)
        //                     ->size(200)
        //                     ->generate("BEGIN:VCARD\nVERSION:3.0\nN:" . $user->names_label['first_surname'] . ";" . $user->names_label['first_name'] . "\nORG:" . $user->society->name . "\nTITLE:" . $user->position . "\nURL;TYPE=pref:https://www.romancerelax.com\nEMAIL;TYPE=WORK;INTERNET:" . $user->email . "\nTEL;TYPE=WORK,VOICE:" . $user->phone_number . "\nEND:VCARD", $path);
        $user = User::where('id', auth()->user()->id)->first();

        return view('carnet', compact('user'));
    }


    public function store(Request $request)
    {
        $request['password'] = Hash::make($request->Documento);
        User::create($request->all());
        return redirect()->route('registro.index')->with('info','El usuario se creó con éxito');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
