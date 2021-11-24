<?php

namespace App\Http\Controllers;

use App\Mail\ClienteDuda;
use App\Models\Abogado;
use App\Models\Servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;


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
        // $abogados = Abogado::all();
        $abogados = Abogado::with('servicios')->get();
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
        // dd($request->archivo);
        // dd($request->all());
        //* Validamos el request de la siguiente forma
        $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_paterno' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_materno' => ['max:40'],
            'email' =>['required', 'max:70', 'email:rfc'],
            'telefono_celular' => ['max:30'],
            'telefono_particular' =>['max:30'],
            'archivo' => ['required'],
            'codigo' => ['required', 'string', 'min:2', 'max:50', 'unique:App\Models\Abogado,codigo'],
        ]);

        $path_destino = 'storage/fotografias';
        $mime = $request->archivo->getClientMimeType();
        $nombreOriginal = $request->archivo->getClientOriginalName();
        $ruta = $request->archivo->storeAs($path_destino, $nombreOriginal);
        //* Alteramos a propósito un poco el request, dando la oportunidad que sean vacíos los campos de apellido materno, y los teléfonos, además, asignamos el valor a user_id (foreign key)
        $request->merge([
            'apellido_materno' => $request->apellido_materno ?? '',
            'telefono_celular' => $request->telefono_celular ?? '',
            'telefono_particular' => $request->telefono_particular ?? '',
            'imagen_original' => $nombreOriginal,
            'imagen_ruta' => $ruta,
            'mime' => $mime,
            'user_id' => Auth::id(),
        ]);
        // Storage::copy(base_path('/storage/app/'.$ruta) ,base_path('/public/fotografias'));

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
        $servicios = Servicio::get();
        return view('abogado.abogado-show', compact('abogado', 'servicios'));
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
        // dd($request->archivo);
        //* Validamos el request de la siguiente forma
        $request->validate([
            'nombre' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_paterno' => ['required', 'string', 'min:2', 'max:40'],
            'apellido_materno' => ['max:40'],
            'email' =>['required', 'max:70', 'email:rfc'],
            'telefono_celular' => ['max:30'],
            'telefono_particular' =>['max:30'],
            'archivo' => ['required'],
            'codigo' => ['required', 'string', 'min:2', 'max:50', Rule::unique('abogados')->ignore($abogado->id)],
        ]);
        
        
        
        // if ($request->hasFile('archivo')) {
        //     $path_destino = 'storage/fotografias';
        //     $pathDestino_aux = 'storage/fotografias/'.$abogado->imagen_original;
        //     if (File::exists($pathDestino_aux)) {
        //         File::delete($pathDestino_aux);
        //     }
        //     $mime = $request->archivo->getClientMimeType();
        //     $nombreOriginal = $request->archivo->getClientOriginalName();
        //     $ruta = $request->archivo->storeAs($path_destino, $nombreOriginal);
        $path_destino = 'storage/fotografias';
        $mime = $request->archivo->getClientMimeType();
        $nombreOriginal = $request->archivo->getClientOriginalName();
        $ruta = $request->archivo->move($path_destino, $nombreOriginal);
        

            //* Alteramos a propósito un poco el request, dando la oportunidad que sean vaciós los campos de apellido materno, y los teléfonos, además, asignamos el valor a user_id (foreign key)
            $request->merge([
                'apellido_materno' => $request->apellido_materno ?? '',
                'telefono_celular' => $request->telefono_celular ?? '',
                'telefono_particular' => $request->telefono_particular ?? '',
                'imagen_original' => $nombreOriginal,
                'imagen_ruta' => $ruta,
                'mime' => $mime,
            ]);
            Abogado::where('id', $abogado->id)->update($request->except('_token', '_method', 'archivo'));
            
        //* Actualizamos en la base de datos, a excepción del token y method, y retornamos al index
        
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

    //* Añadimos una función específica para la relación de muchos a muchos
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abogado  $abogado
     * @return \Illuminate\Http\Response
     */

    public function agregarServicios(Request $request, Abogado $abogado) {
        // dd($request->all(), $abogado);
        $request->validate([
            'servicio_id' => ['required'],
        ]);
        $abogado->servicios()->sync($request->servicio_id);

        return redirect()->route('abogado.show', $abogado);
    }

    // public function descargarImagen(Abogado $abogado) {
    //     $headers = ['Content-Type' => $abogado->mime];
    //     return Storage::download($abogado->imagen_ruta, $abogado->imagen_original, $headers);
    // }
    //* Usamos la siguiente función para descargar la Imagen del abogado, pasando en la función estáticca download la ruta, el nombre, y el mime (headers)
    public function descargarImagen(Abogado $abogado) {
        $headers = ['Content-Type' => $abogado->mime];
        return Storage::download($abogado->imagen_ruta, $abogado->imagen_original, $headers);
    }


    public function obtenerServicios() {
        $servicios = Servicio::all();
        $cont = 0;
        return view('servicio.servicio', compact('servicios', 'cont'));
    }

    public function dudaCliente() {
        return view('cliente.duda');
    }

    public function enviarDuda() {
        Mail::to('cliente@test.com')->send(new ClienteDuda);
        return redirect()->back();
    }

    public function clienteAbogados() {
        $abogados = Abogado::with('servicios')->get();

        return view('cliente.cliente-abogados', compact('abogados'));
    }
}
