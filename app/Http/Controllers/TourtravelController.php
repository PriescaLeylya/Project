<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourtravel;
use App\Models\Pelanggan;

class TourtravelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tourtravels = Tourtravel::all();
        return view('tourtravels.index',['tourtravels'=>$tourtravels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourtravels = Tourtravel::all();
        return view('tourtravels.create',['tourtravels'=>$tourtravels]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tourtravels = new Tourtravel;
        $tourtravels->Tujuan = $request->Tujuan;
        $tourtravels->Destinasi = $request->Destinasi;
        $tourtravels->Harga = $request->Harga;

        if($request->file('photo')){
            $photo = $request->file('photo')->store('images','public');
        }
      
        $tourtravels->photo = $photo;
        $tourtravels->save();
        // if true, redirect to index
        return redirect()->route('tourtravels.index')->with('success', 'Add data success!');       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tourtravels = Tourtravel::find($id);
        return view('tourtravels.show',['tourtravels'=>$tourtravels]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tourtravels = Tourtravel::find($id);
        return view('tourtravels.edit',['tourtravels'=>$tourtravels]);
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
        $tourtravels = Tourtravel::find($id);
        $tourtravels->Tujuan = $request->Tujuan;
        $tourtravels->Destinasi = $request->Destinasi;
        $tourtravels->Harga = $request->Harga;

        if($tourtravels->photo && file_exists(storage_path('app/public/'.$tourtravels->photo)))
        {
            \Storage::delete('public/'.$tourtravels->photo);
        }
        $photo = $request->file('photo')->store('images','public');

        $tourtravels->photo = $photo;
        $tourtravels->save();
        return redirect()->route('tourtravels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tourtravels = Tourtravel::find($id);
        $tourtravels->delete();
        return redirect()->route('tourtravels.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $tourtravels = Tourtravel::where('Tujuan', 'like', "%" . $keyword . "%")->paginate(5);
        return view('tourtravels.index', compact('tourtravels'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function __construct()
    {
          $this->middleware('auth');
    }
}
