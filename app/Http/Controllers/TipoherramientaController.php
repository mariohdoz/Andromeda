<?php

namespace andromeda\Http\Controllers;

use Illuminate\Http\Request;
use andromeda\Tipoherramienta;

class TipoherramientaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $input = $request->all();
      if($request->get('search')){
        $tipo = Tipoherramienta::where('tipo','LIKE',"%{$request->get('search')}%")->paginate(5);
      }else {
        $tipo = Tipoherramienta::paginate(5);
      }
      return response($tipo);
        /**$tipo = Tipoherramienta::all();
        return view('tipo.index',['tipo'=>$tipo]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = $request->all();
        $create = Tipoherramienta::create($tipo);
        return response($tipo);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipo = Tipoherramienta::find($id);
        return response($tipo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipo = $request->all();
        Tipoherramienta::where('idtipo',$id)->update->$input;
        $tipo = Tipoherramienta::find($id);
        return response($tipo);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Tipoherramienta::where('idtipo',$id)->delete();
    }
}
