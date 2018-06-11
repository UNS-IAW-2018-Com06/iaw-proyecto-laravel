<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Universidad;

class UniversidadController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function create() {
        return view('universidadcreate');
    }

    public function store(Request $request)
    {
        $universidad = new Universidad();
        $universidad->nombre = $request->get('nombre');
        $universidad->provincia = $request->get('provincia');
        $universidad->ciudad = $request->get('ciudad');        
        $universidad->dirección = $request->get('direccion');        
        $universidad->telefono = $request->get('telefono');    
        $universidad->web = $request->get('web');         
        $universidad->coordenadas = [ doubleval($request->get('coordenadas0')),  doubleval($request->get('coordenadas1')) ];
        $universidad->save();
        return redirect('universidad')->with('success', 'Universidad agregada');
    }

    public function index()
    {
        $universidades=Universidad::all();
        $uni = json_decode($universidades); 
        return view('universidadindex',compact('uni'));
    }

    public function edit($id)
    {
        $universidad = Universidad::find($id);
        return view('universidadedit',compact('universidad','id'));
    }

    public function update(Request $request, $id)
    {
        $universidad= Universidad::find($id);
        $universidad->nombre = $request->get('nombre');
        $universidad->provincia = $request->get('provincia');
        $universidad->ciudad = $request->get('ciudad');        
        $universidad->dirección = $request->get('direccion');        
        $universidad->telefono = $request->get('telefono');    
        $universidad->web = $request->get('web');            
        $universidad->coordenadas = [ doubleval($request->get('coordenadas0')),  doubleval($request->get('coordenadas1')) ];
        $universidad->save();

        echo $request->get('nombreCarrera[]');
        echo "HOLLALALALLSDKALSDKASD";
        return redirect('universidad')->with('success', 'Universidad actualizada');
    }

    public function destroy($id)
    {
        $universidad = Universidad::find($id);
        $universidad->delete();
        return redirect('universidad')->with('success','Universidad eliminada');
    }
}

