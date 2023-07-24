<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::latest()->paginate(5);
        return view('produto.index',compact('produto'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'name' => 'required',
                'detail' => '',
                'price' => 'required',
                'stock' => 'required'
            ]);
      
            Produto::create($request->all());
       
            return redirect()->route('produto.index')->with('success','Produto cadastrado com sucesso.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        return view('produto.show',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        return view('produto.edit',compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'name' => 'required',
            'detail' => '',
            'price' => 'required',
            'stock' => 'required'
        ]);
  
        $produto->update($request->all());
  
        return redirect()->route('produto.index')->with('success','Produto Editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();
  
        return redirect()->route('produto.index')->with('success','Produto apagado com sucesso');
    }
}
