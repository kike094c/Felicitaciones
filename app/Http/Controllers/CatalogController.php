<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Cliente;

class CatalogController extends Controller
{

  public function getIndex(){
    $clientes = Cliente::all();
    return View('index', compact('clientes'));
  }

  public function getShow($id){

    $clientes = Cliente::findOrFail($id);
    return View('show', compact('clientes','id'));

  }

  public function getCreate(){
    $resultado="";
      return View('create', compact('resultado'));
  }

  public function insert(Request $request){
    $cliente = new Cliente;
    $cliente->nombre = $request->nombre;
    $cliente->imagen =  "images/$request->imagen";
    $cliente->fecha_nacimiento = $request->fecha;
    $cliente->correo = $request->correo;
    $cliente->save();
    $insertedId = $cliente->id;
    $resultado="Cliente insertado con Éxito";
    return View('create', compact('resultado'));
  }

  public function getEdit($id){
    $resultado="";
    $cliente = Cliente::findOrFail($id);
    return View('edit',compact('cliente','resultado','id'));
  }

  public function edit(Request $request, $id){
    $cliente = Cliente::findOrFail($id);
    $cliente->nombre = $request->nombre;
    $cliente->imagen = "images/$request->imagen";
    $cliente->fecha_nacimiento = $request->fecha;
    $cliente->correo = $request->correo;
    $cliente->save();
    $resultado="Cliente modificado con Éxito";
    return View('create', compact('resultado', 'cliente', 'id'));
  }
  /*
  public function getDelete($id){
    $cliente = Cliente::find($id);
    $cliente->delete();
  }*/
}
