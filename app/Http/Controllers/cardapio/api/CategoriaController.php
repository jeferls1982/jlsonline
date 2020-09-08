<?php

namespace App\Http\Controllers\cardapio\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\cardapio\Categoria;

class CategoriaController extends Controller {

    public $categoria;

    function __construct(Categoria $categoria) {
        $this->categoria = $categoria;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categorias = $this->categoria->where('user_id', auth()->id())->with('ingredientes')->get();
        return response()->json($categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $categoria = $this->categoria->create($request->all());
        return response()->json($categoria);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $categoria = $this->categoria->find($id);
        return response()->json($categoria);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {


        $categoria = $this->categoria->find($id);
        $categoria->update($request->all());
        return response()->json($categoria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $this->categoria->destroy($id);
        return response()->json(['success' => 'Deletado com sucesso']);
    }

}
