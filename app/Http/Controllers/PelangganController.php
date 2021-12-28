<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Tourtravel;
use PDF;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Pelanggan::with('tourtravels')->get();
        return view('pelanggans.index', ['pelanggans'=>$pelanggans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tourtravels = Tourtravel::all();
        return view('pelanggans.create',['tourtravels'=>$tourtravels]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggans = new Pelanggan;
  
        $pelanggans->nama = $request->nama;
        $pelanggans->jenis_kelamin = $request->jenis_kelamin;
        $pelanggans->phone_number = $request->phone_number;
        $pelanggans->alamat = $request->alamat;
        $pelanggans->tanggal_booking = $request->tanggal_booking;

        $tourtravels = new Tourtravel;
        $tourtravels->id = $request->Tourtravel;

        $pelanggans->tourtravels()->associate($tourtravels);
        $pelanggans->save();

                // if true, redirect to index
        return redirect()->route('pelanggans.index')
        ->with('success', 'Add data success!');

        
    }

    public function show($id)
    {
        $pelanggans = Pelanggan::find($id);
        return view('pelanggans.show', ['pelanggans'=>$pelanggans]);
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggans = Pelanggan::find($id);
        $tourtravels = Tourtravel::all();
        return view('pelanggans.edit',['pelanggans'=>$pelanggans,'tourtravels'=>$tourtravels]);
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
        $pelanggans = Pelanggan::find($id);
        $pelanggans->nama = $request->nama;
        $pelanggans->jenis_kelamin = $request->jenis_kelamin;
        $pelanggans->phone_number = $request->phone_number;
        $pelanggans->alamat = $request->alamat;
        $pelanggans->tanggal_booking = $request->tanggal_booking;

        $tourtravels = new Tourtravel();
        $tourtravels->id = $request->Tourtravel;

        $pelanggans->tourtravels()->associate($tourtravels);
        $pelanggans->save();
      
        return redirect()->route('pelanggans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggans = Pelanggan::find($id);
        $pelanggans->delete();
        return redirect()->route('pelanggans.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $pelanggans = Pelanggan::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pelanggans.index', compact('pelanggans'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    
    public function __construct()
    {
          $this->middleware('auth');
    }

    public function report($id){
        $pelanggans = Pelanggan::find($id);
        $pdf = PDF::loadview('pelanggans.report',['pelanggans'=>$pelanggans]);
        return $pdf->stream();
    }
}
