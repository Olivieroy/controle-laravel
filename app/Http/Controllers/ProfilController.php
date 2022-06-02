<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfilController extends Controller
{
    //
    public function picture()
    {      
        $user = Auth::user();
       
        return view('profil.index', ['user' => $user] );
    }

    public function update(User $user, Request $request)
    {
         $inputs = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'email' => 'required',
        ]);

        $user->update($inputs);

        $request->session()->flash('alert', ['type' => 'success', 'message' => "Votre profil a été modifié."]);

        return redirect()->route('items.index');
    }
}
