<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=informasi::orderBy('idInformasi', 'asc')->paginate(5);
        return view('informasi.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('idInformasi',$request->idInformasi);
        Session::flash('tanggal',$request->tanggal);
        Session::flash('judul',$request->judul);
        Session::flash('isi',$request->isi);

        $request->validate([
            'idInformasi'=>'required|numeric|unique:informasis,idInformasi',
            'tanggal'=>'required',
            'judul'=>'required',
            'isi'=>'required',
        ],[
            'idInformasi.required'=> 'Id Informasi wajib diisi',
            'idInformasi.numeric'=> 'Id Informasi dalam bentuk angka',
            'idInformasi.unique'=> 'Id Informasi telah berada di database',
            'tanggal.required'=> 'Tanggal wajib diisi',
            'judul.required'=> 'Judul Informasi wajib diisi',
            'isi.required'=> 'Isi Informasi wajib diisi',
        ]);
        $data=[
            'idInformasi'=>$request->idInformasi,
            'tanggal'=>$request->tanggal,
            'judul'=>$request->judul,
            'isi'=>$request->isi,
        ];
        informasi::create($data);
        return redirect()->to('informasi')->with('success','Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        $data = informasi::where('idInformasi', $id)->first();
        return view('informasi.lihat')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */

    public function edit(string $id) //untuk melakukan proses edit
    {
        $data = informasi::where('idInformasi', $id)->first();
        return view('informasi.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id) //untuk menyimpan update data
    {
        $request->validate([
            'judul'=>'required',
            'isi'=>'required',
        ],[
            'judul.required'=> 'Judul Informasi wajib diisi',
            'isi.required'=> 'Isi Informasi wajib diisi',
        ]);
        $data=[
            'judul'=>$request->judul,
            'isi'=>$request->isi,
        ];
        informasi::where('idInformasi', $id)->update($data);
        return redirect()->to('informasi')->with('success','Berhasil melakukan update data');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //untuk melakukan pernghapusan data
    {
        informasi::where('idInformasi', $id)->delete();
        return redirect()->to('informasi')->with('success','Berhasil melakukan hapus data');
    }
}
