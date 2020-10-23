<?php

namespace App\Http\Controllers\Api;

use App\Models\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();
        return response()->json($alunos,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aluno::create($request->all());

        $return = ['message' => ["Aluno Criado Com Sucesso" ] ];
        return response()->json($return,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        return response()->json($aluno, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->update($request->all());

        $return = ['message' => ['Aluno Alterado Com Sucesso!!']];
        return response()->json($return, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();
        $return = ['message' => ['Aluno Exluído com sucesso!!!']];
        return response()->json($return, 200);
    }
}
