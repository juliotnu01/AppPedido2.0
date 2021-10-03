<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Producto;
use Storage;

class ProductoController extends Controller
{
    public function index()
    {
        try {
            $productos = Producto::orderBy('id', 'desc')->get();
            return response($productos);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function store(Request $request, Producto $producto)
    {
        try {
            return DB::transaction(function () use ($request, $producto) {
                $data = json_decode($request['data']);
                $producto->nombre_producto = $data->nombre_producto;
                $producto->precio_producto = $data->precio_producto;
                $producto->descripcion_producto = $data->descripcion_producto;
                $producto->stock_producto =  $data->stock_producto ;
                Storage::disk('public')->putFileAs('img_productos',$request->file('img_producto'), $request->file('img_producto')->getClientOriginalName());
                $url = Storage::disk('public')->url("/img_productos/{$request->file('img_producto')->getClientOriginalName()}");
                $producto->img_producto = $url;
                $producto->save();
                return ['mensaje' =>  "producto guardado con exito"];
            },5);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
