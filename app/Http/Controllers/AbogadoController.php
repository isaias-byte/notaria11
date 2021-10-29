<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abogados = Abogado::all();
        return view('abogado.abogado-index', compact('abogados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('abogado.abogado-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_paterno' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_materno' => ['max:40'],
            'email' =>['required', 'max:70', 'email:rfc'],
            'telefono_celular' => ['max:30'],
            'telefono_particular' =>['max:30'],
            'codigo' => ['required', 'string', 'min:2', 'max:50', 'unique:App\Models\Abogado,codigo'],
        ]);

        $request->merge([
            'apellido_materno' => $request->apellido_materno ?? '',
            'telefono_celular' => $request->telefono_celular ?? '',
            'telefono_particular' => $request->telefono_particular ?? '',
        ]);
        
        Abogado::create($request->all());
        return redirect()->route('abogado.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function show(Abogado $abogado)
    {
        return view('abogado.abogado-show', compact('abogado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function edit(Abogado $abogado)
    {
        return view('abogado.abogado-create', compact('abogado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abogado $abogado)
    {
        $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_paterno' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_materno' => ['max:40'],
            'email' =>['required', 'max:70', 'email:rfc'],
            'telefono_celular' => ['max:30'],
            'telefono_particular' =>['max:30'],
            'codigo' => ['required', 'string', 'min:2', 'max:50', Rule::unique('abogados')->ignore($abogado->id)],
        ]);

        $request->merge([
            'apellido_materno' => $request->apellido_materno ?? '',
            'telefono_celular' => $request->telefono_celular ?? '',
            'telefono_particular' => $request->telefono_particular ?? '',
        ]);

        Abogado::where('id', $abogado->id)->update($request->except('_token', '_method'));

        return redirect()->route('abogado.show', $abogado);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abogado $abogado)
    {
        $abogado->delete();
        return redirect()->route('abogado.index');
    }
}
