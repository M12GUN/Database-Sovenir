<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sovenir;
use Illuminate\Support\Facades\DB;

class strukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $struk = DB::table('struk')
                    ->where('jenis','LIKE','%'.$keyword.'%')
                    ->paginate(6);
                    return view('struk.index',compact('struk'))
                    ->with('i', (request()->input('page', 1) - 1) * 6);
    }

}
