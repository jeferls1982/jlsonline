<?php

namespace App\Http\Controllers\cardapio\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\models\cardapio\Ingrediente;

class IngredienteController extends Controller {

    private $ingrediente;

    function __construct(Ingrediente $ingrediente) {
        $this->ingrediente = $ingrediente;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user) {
        $ingredientes = $this->ingrediente->with('categoria')->where('user_id', auth()->id())->get();
        return response()->json($ingredientes);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $ingrediente = $this->ingrediente->create($request->all());
        return response()->json($ingrediente);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $ingrediente = $this->ingrediente->with('categoria')->find($id);
        return response()->json($ingrediente);
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
        $ingrediente = $this->ingrediente->find($id);
        $ingrediente->update($request->all());
        return response()->json($ingrediente);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
         $this->ingrediente->destroy($id);
        return response()->json(['success' => 'Deletado com sucesso']);
    }

}
