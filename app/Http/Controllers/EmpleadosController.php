<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados']=Empleados::paginate(30);

        return view('empleados.index',$datos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $datosEmpleado=request()->all();

        $datosEmpleado=request()->except('_token');

        Empleados::insert($datosEmpleado);

       // return response()->json($datosEmpleado);
       return redirect('empleados')->with('Mensaje','Empleado agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(Empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado=Empleados::findOrFail($id);
        return view('empleados.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado=request()->except(['_token','_method']);
        Empleados::where('id','=',$id)->update($datosEmpleado);

       // $empleado=Empleados::findOrFail($id);
       // return view('empleados.edit',compact('empleado'));
       return redirect('empleados')->with('Mensaje','Empleado modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleados::destroy($id);
        return redirect('empleados')->with('Mensaje','Empleado eliminado exitosamente');
        return redirect('empleados');

    }
}
