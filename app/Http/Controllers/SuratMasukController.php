<?php

namespace App\Http\Controllers;

use App\Models\Penerbit;
use App\Models\Pengesah;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class SuratMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat_masuk.index', [
            'surat_masuk' => SuratMasuk::orderBy('created_at', 'desc')->get(),
            'pengesah' => Pengesah::all()->pluck('nama_pengesah', 'id_pengesah'),
            'penerbit' => Penerbit::all()->pluck('nama_penerbit', 'id_penerbit'),
        ]);
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
        SuratMasuk::create([
            'no_surat' => $request->no_surat,
            'nama_pengirim' => $request->nama_pengirim,
            'waktu' => $request->waktu,
            'lampiran' => $request->lampiran,
            'perihal' => $request->perihal,
            'nama_penerima' => $request->nama_penerima,
            'isi_surat' => $request->isi_surat,
            'id_penerbit' => $request->id_penerbit,
            'tempat' => $request->tempat,
            'id_pengesah' => $request->id_pengesah,
            'tembusan' => $request->tembusan,

        ]);

        return redirect('/surat-masuk')->with('sukses-tambah', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $surat_masuk = SuratMasuk::find($id);

        return response()->json($surat_masuk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }
    public function detail($id)
    {
        // return view('surat_masuk.detail', [
        //     'surat_masuk' => SuratMasuk::orderBy('created_at', 'desc')->get(),
        //     'pengesah' => Pengesah::all()->pluck('nama_pengesah', 'id_pengesah'),
        //     'penerbit' => Penerbit::all()->pluck('nama_penerbit', 'id_penerbit'),
        // ]);

        // $detail = DB::table('surat_masuk_wahni')
        //     ->join('penerbit', 'surat_masuk_wahni.id_penerbit', '=', 'penerbit.id_penerbit')
        //     ->join('pengesah', 'surat_masuk_wahni.id_pengesah', '=', 'pengesah.id_pengesah')
        //     ->where('id_surat_masuk', $id)
        //     ->get();


        // return view('surat_masuk.detail', $detail);

        // dd($detail);
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
        SuratMasuk::find($id)->update([
            'no_surat' => $request->no_surat,
            'nama_pengirim' => $request->nama_pengirim,
            'waktu' => $request->waktu,
            'lampiran' => $request->lampiran,
            'perihal' => $request->perihal,
            'nama_penerima' => $request->nama_penerima,
            'isi_surat' => $request->isi_surat,
            'id_penerbit' => $request->id_penerbit,
            'tempat' => $request->tempat,
            'id_pengesah' => $request->id_pengesah,
            'tembusan' => $request->tembusan,
        ]);

        return redirect('/surat-masuk')->with('sukses-ubah', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratMasuk::find($id)->delete();

        return back();
    }
}