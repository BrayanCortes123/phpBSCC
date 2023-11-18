<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Carta;

class CartaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartas = Carta::all();
        return view('cartas.index', compact('cartas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cartas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombrecarta' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ]);

        $data = $request->except('_token');

        Carta::create($data);

        return redirect()->route('cartas.index')->with('success', 'Carta creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carta = Carta::findOrFail($id);
        return view('cartas.show', compact('carta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carta = Carta::findOrFail($id);
        return view('cartas.edit', compact('carta'));
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
        $request->validate([
            'nombrecarta' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
        ]);
    
        $carta = Carta::findOrFail($id);
    
        $data = $request->only(['nombrecarta', 'descripcion', 'precio']);
        
        $carta->update($data);
    
        return redirect()->route('cartas.index')->with('success', 'Carta actualizada correctamente');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carta = Carta::findOrFail($id);
        $carta->delete();

        return redirect()->route('cartas.index')->with('success', 'Carta eliminada correctamente');
    }

    public function exportPdf($id)
{
    $carta = Carta::findOrFail($id);
    $pdf = PDF::loadView('cartas.pdf', compact('carta'));
    return $pdf->download('carta.pdf');
}

}