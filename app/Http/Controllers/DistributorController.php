<?php

namespace App\Http\Controllers;

use App\Distributor;
use Illuminate\Http\Request;

class DistributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = Distributor::paginate(10);
        return view('distributor.index', ['distributors' => $distributor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $item= new Distributor;
        $item->kode=$request['kode'];
        $item->nama=$request['nama'];
        $item->jekel=$request['jekel'];
        $item->alamat=$request['alamat'];
        $item->nohp=$request['nohp'];
        $item->save();

        return redirect()->back()->with('distributor', 'Data Tersimpan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item= new Distributor;
        $item->kode=$request['kode'];
        $item->nama=$request['nama'];
        $item->jekel=$request['jekel'];
        $item->alamat=$request['alamat'];
        $item->nohp=$request['nohp'];
        $item->save();

        return redirect('distributor');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function show(Distributor $distributor)
    {
        $item = Distributor::paginate(10);
        return view('distributor.show', ['distributors' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Distributor::find($id);
        return view('distributor.edit',['distributors' =>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = distributor::find($id);
        $item->kode=$request['kode'];
        $item->nama=$request['nama'];
        $item->jekel=$request['jekel'];
        $item->alamat=$request['alamat'];
        $item->nohp=$request['nohp'];
        $item->update();

        return redirect('/distributor/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distributor  $distributor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Distributor::where('id',$id);
        $item->delete();

        return redirect()->back();
    }
}
