<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::paginate(10);
        return view('produk.index', ['produks' => $produk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item= new Produk;
        $item->jepro=$request['jepro'];
        $item->kobar=$request['kobar'];
        $item->nabar=$request['nabar'];
        $item->vol=$request['vol'];
        $item->habar=$request['habar'];
        $item->save();

        return redirect()->back()->with('produk', 'Data Tersimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item= new Produk;
        $item->jepro=$request['jepro'];
        $item->kobar=$request['kobar'];
        $item->nabar=$request['nabar'];
        $item->vol=$request['vol'];
        $item->habar=$request['habar'];
        $item->save();

        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        $item = Produk::paginate(10);
        return view('produk.show', ['produks' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Produk::find($id);
        return view('produk.edit',['produks' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = produk::find($id);
        $item->jepro=$request['jepro'];
        $item->kobar=$request['kobar'];
        $item->nabar=$request['nabar'];
        $item->vol=$request['vol'];
        $item->habar=$request['habar'];
        $item->update();

        return redirect('/produk/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Produk::where('id',$id);
        $item->delete();

        return redirect()->back();
    }
}
