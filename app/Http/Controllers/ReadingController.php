<?php

namespace App\Http\Controllers;
use App\Models\Reading; #estamos importando el modelo Reading para poder interactuar con la tabla readings en la base de datos.
use Illuminate\Http\Request;

class ReadingController extends Controller
{
        #creamos un nuevo registro en la tabla readings utilizando el modelo Reading. 
        #El método create() toma un arreglo asociativo con los datos validados y los inserta en la base de datos.
      public function store(Request $request)
    {
        $request->validate([
            'device_id' => 'required|string', //validamos que el campo device_id sea obligatorio y de tipo string.
            'nivel' => 'required|numeric', //validamos que el campo nivel sea obligatorio y de tipo numérico.
        ]);
        $reading = Reading::create([
            'device_id' => $request->device_id,
            'nivel' => $request->nivel,
        ]);
        #retornamos una respuesta JSON indicando que la lectura se ha creado correctamente, 
        #junto con el objeto de lectura recién creado.
        return response()->json([
            'message' => 'Reading created successfully',
            'reading' => $reading,
        ], 201);
    }
    public function index()
    {
        //obytenemos las ultimas 100 lecturas de la tabla reading y las ordenamos de manera descendente por la fecha de creación.   
        $readings=reading::orderBy('created_at','desc')->limit(100)->get();
        return response()->json($readings); //retornamos las lecturas en formato JSON.
    }
}
