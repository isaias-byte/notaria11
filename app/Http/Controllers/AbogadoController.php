<?php

namespace App\Http\Controllers;

use App\Models\Abogado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AbogadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //* obtenemos todos los abogados, y los pasamos a la vista index
        $abogados = Abogado::all();
        //! Tenemos la relación de uno a muchos (user(1)->abogados(n)) trabajando correctamente, con la siguiente línea obtenemos los abogados solamente del usuario que está registrado, no obstante, en nuestro caso siempre mostramos todos los abogados de la notaría que están en la BD
        // $abogados = Auth::user()->abogados()->get();
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
        //* Validamos el request de la siguiente forma
        $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_paterno' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_materno' => ['max:40'],
            'email' =>['required', 'max:70', 'email:rfc'],
            'telefono_celular' => ['max:30'],
            'telefono_particular' =>['max:30'],
            'codigo' => ['required', 'string', 'min:2', 'max:50', 'unique:App\Models\Abogado,codigo'],
        ]);
        //* Alteramos a propósito un poco el request, dando la oportunidad que sean vacíos los campos de apellido materno, y los teléfonos, además, asignamos el valor a user_id (foreign key)
        $request->merge([
            'apellido_materno' => $request->apellido_materno ?? '',
            'telefono_celular' => $request->telefono_celular ?? '',
            'telefono_particular' => $request->telefono_particular ?? '',
            'user_id' => Auth::id(),
        ]);
        //* Guardamos en la base de datos y retornamos al index
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
        //* Validamos el request de la siguiente forma
        $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_paterno' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_materno' => ['max:40'],
            'email' =>['required', 'max:70', 'email:rfc'],
            'telefono_celular' => ['max:30'],
            'telefono_particular' =>['max:30'],
            'codigo' => ['required', 'string', 'min:2', 'max:50', Rule::unique('abogados')->ignore($abogado->id)],
        ]);

        //* Alteramos a propósito un poco el request, dando la oportunidad que sean vaciós los campos de apellido materno, y los teléfonos, además, asignamos el valor a user_id (foreign key)
        $request->merge([
            'apellido_materno' => $request->apellido_materno ?? '',
            'telefono_celular' => $request->telefono_celular ?? '',
            'telefono_particular' => $request->telefono_particular ?? '',
        ]);
        //* Actualizamos en la base de datos, a excepción del token y method, y retornamos al index
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
        //* Con el método delete eliminamos de la base de datos el registro
        $abogado->delete();
        return redirect()->route('abogado.index');
    }
}
