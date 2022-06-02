@extends('layouts.base')

@section('content')

<h2 class="text-blue-800 text-2xl mb-4">Votre profil</h2>

<p>{{ Auth::user()->name }}</p>

<form method="post" action="{{ route('profil.update', $user) }}">
    @csrf
    @method('put')
    <div class="mt-4">
        <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="name">
            Nom
        </label>
        <input class="text-center w-full uppercase font-bold py-3 border-2 border-black"  id="name" type="text" name="name" :placeholder="old('name', $user->name)"  :value="old('name', $user->name)" required autofocus />
    </div> 
    <div class="mt-4">
        <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="thumbnail">
            E-mail
        </label>
        <input class="text-center w-full uppercase font-bold py-3 border-2 border-black "  id="thumbnail" type="text" name="email" :value="old('thumbnail', $user->email)" required />
    </div>
    <div class="mt-4">
        <label class="block uppercase tracking-wide text-xs font-bold mb-2" for="price">
            Photo de profil
        </label>
        <input class="text-center w-full uppercase font-bold py-3 " id="price" type="file" name="image" :value="" required />
    </div>
   
    <div class="mt-4">
        <button type="submit" class="text-center w-full text-white uppercase bg-blue-800 font-bold py-3 hover:bg-blue-500">
            Enregistrer
        </button>
    </div>
</form>
@endsection