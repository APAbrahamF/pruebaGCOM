<?php

namespace App\Http\Controllers;

Use App\Models\Pets;
use Illuminate\Http\Request;

class PetsController extends Controller
{

    public function getAllPets()
    {
        return Pets::all();
    }

    public function getPetsByLimit(Request $request)
    {
        $limit = $request->input('limit');
        if($limit < 100)
        {
        $petsArray = Pets::take($limit)->get();
        return $petsArray;
        }
        else
        return Pets::all();
    }

    public function getPetById(Pets $pet)
    {
        return $pet;
    }

    public function createPet(Request $request)
    {
        $newPet = Pets::create($request->all());
        return response()->json($newPet, 201);
    }

    public function updatePet(Request $request, Pets $pet)
    {
        $pet->update($request->all());

        return response()->json($pet, 200);
    }

    public function deletePet(Pets $pet)
    {
        $pet->delete();

        return response()->json(null, 204);
    }
}
