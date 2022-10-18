<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use App\Exports\ArticulosExport;

use App\Imports\ArticulosImport;
use Maatwebsite\Excel\Facades\Excel;

class ArticulosController extends Controller
{
    
    public function ImportarExcel(Request $request){
       
        Excel::import(new ArticulosImport,$request->file('articulos'));
       
        return redirect(route('articulos.index'));
    }

    public function ExportExcel(){
       
        return Excel::download(new ArticulosExport, 'listadoArticulos.xls');
    }

    public function index(){
        $articulos=Articulo::all();
        return view('articulos.index',compact('articulos'));
    }

    public function create(){

    }

    public function store(Request $request){
        $articulo=new Articulo;
        $articulo->create($request->all());
        return redirect(route('articulos.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articulo $articulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articulo $articulo)
    {
        //
    }
}
