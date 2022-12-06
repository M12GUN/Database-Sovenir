<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\penjual;
use Illuminate\Support\Facades\DB;

class penjualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::select('select * from penjual where is_delete = 0');
        return view('penjual.index')
            ->with('penjual', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjual.create');
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
            'id' => 'required|min:1|max:20',
            'nama' => 'required|min:3',
            'toko' => 'required|min:3',
            'asal' => 'required|min:3',
        ]);

        DB::insert(
            'INSERT INTO penjual(id,nama,toko,asal) VALUES
        (:id, :nama, :toko, :asal)',
            [
                'id' => $request->id,
                'nama' => $request->nama,
                'toko' => $request->toko,
                'asal' => $request->asal,
            ]
        );
        return redirect()->route('penjual.index')->with('success', 'Datane berhasil disimpan mase');
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
        return view('penjual.edit')->with([
            'penjual' => penjual::find($id),
        ]);
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

            'nama' => 'required|min:3',
            'toko' => 'required|min:3',
            'asal' => 'required|min:3',
        ]);
        DB::update('UPDATE penjual SET nama = :nama, toko = :toko, asal = :asal where id=:id',
        [
            
            'id' => $id,
            'nama' => $request->nama,
            'toko' => $request->toko,
            'asal' => $request->asal,
        ]
    );
    return redirect()->route('penjual.index')->with('success', 'Datane berhasil diubah mase');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        DB::delete('DELETE FROM penjual WHERE id =:id', ['id' => $id]);

        return redirect()->route('penjual.index')-> with('success', 'Data penjual saged dihapus');
    }
    public function soft($id)
    {
        DB::update('UPDATE penjual SET is_delete = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('penjual.index')->with('success', 'Data Barang sageeed dihapus');
    }

}
