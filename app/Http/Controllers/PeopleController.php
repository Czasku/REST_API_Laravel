<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function create(Request $request) 
    {
        $people = new People();
        $people->first_name = $request->first_name;
        $people->last_name = $request->last_name;
        $people->phone_number = $request->phone_number;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;

        $people->save();

        return response()->json('Pomyślnie dodano osobe!', 200);
    }

    public function update(Request $request)
    {
        $people = People::findorfail($request->id);

        $people->first_name = $request->first_name;
        $people->last_name = $request->last_name;
        $people->phone_number = $request->phone_number;
        $people->street = $request->street;
        $people->city = $request->city;
        $people->country = $request->country;

        $people->update();

        return response()->json('Pomyślnie zaktualizowano osobe!', 200);
    }

    public function delete(Request $request)
    {
        $people = People::findorfail($request->id)->delete();

        return response()->json('Pomyślnie usunięto osobe!', 200);
    }
    
    public function readall()
    {
        $people = People::all();

        return response()->json($people, 200);
    }
    
    public function read(Request $request)
    {
        $people = People::findorfail($request->id);

        return response()->json($people, 200);
    }
}