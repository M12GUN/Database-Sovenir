<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sovenir;
use Illuminate\Support\Facades\DB;

class sovenirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = DB::select('select * from sovenir where is_delete = 0');
        return view('sovenir.index')
            ->with('sovenir', $datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sovenir.create');
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
            'harga' => 'required|min:3',
            'jenis' => 'required|min:3',
            'asal' => 'required|min:3',
        ]);

        DB::insert(
            'INSERT INTO sovenir(id,harga,jenis,asal) VALUES
        (:id, :harga, :jenis, :asal)',
            [
                'id' => $request->id,
                'harga' => $request->harga,
                'jenis' => $request->jenis,
                'asal' => $request->asal,
            ]
        );
        return redirect()->route('sovenir.index')->with('success', 'Datane berhasil disimpan mase');
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
        return view('sovenir.edit')->with([
            'sovenir' => sovenir::find($id),
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
        $request->validate ([

            'harga' => 'required|min:3',
            'jenis' => 'required|min:3',
            'asal' => 'required|min:3',
        ]);
            DB::update('UPDATE sovenir SET harga = :harga, jenis = :jenis, asal = :asal where id=:id',
                [
                    
                    'id' => $id,
                    'harga' => $request->harga,
                    'jenis' => $request->jenis,
                    'asal' => $request->asal,
                ]
            );
            return redirect()->route('sovenir.index')->with('success', 'Datane berhasil diubah mase');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        DB::delete('DELETE FROM sovenir WHERE id =:id', ['id' => $id]);

        return redirect()->route('sovenir.index')-> with('success', 'Data sovenir saged dihapus');
    }

    public function soft($id)
    {
        DB::update('UPDATE sovenir SET is_delete = 1 WHERE id = :id', ['id' => $id]);

        return redirect()->route('sovenir.index')->with('success', 'Data Barang sageeed dihapus');
    }

}
