<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    private $clientes = [
        ['id' => 1,  'nome' => "João da Silva"],
        ['id' => 2,  'nome' => "Antonio Martins"],
        ['id' => 3,  'nome' => "Pedro da Silva"],
        ['id' => 4,  'nome' => "Luandson Santos"],
        ['id' => 5,  'nome' => "Maria Clara"],
        ['id' => 6,  'nome' => "Anne dos Santos"],
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = $this->clientes;
        return view(
            'clientes.index', 
            compact(['clientes'])
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados['id'] = count($this->clientes) + 1;
        $dados['nome'] = $request->nome;
        $this->clientes[] = $dados;

        $clientes = $this->clientes;
        return view('clientes.index', compact(['clientes']));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
