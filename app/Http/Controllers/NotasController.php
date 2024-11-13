<?php

namespace App\Http\Controllers;

use App\Models\NotaFiscal;
use DB;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas = DB::select('select * from nota_fiscal');
        $notasModel = NotaFiscal::hydrate($notas);
        return view('notas.index', array('notas' => $notasModel));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        DB::transaction(function () use ($request) {
            DB::insert(
                'insert into nota_fiscal(id_nota, emissor, data) values (?, ?, ?)',
                [
                    $request->id_nota,
                    $request->emissor,
                    $request->data
                ]

            );


            foreach ($request->items as $item) {
                DB::insert(
                    'insert into item(id_nota, id_item, produto, valor) values (?, ?, ?, ?)',
                    [
                        $request->id_nota,
                        $item['item'],
                        $item['produto'],
                        $item['valor'],
                    ]

                );
            }

        });
        return redirect()->route('notas.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
