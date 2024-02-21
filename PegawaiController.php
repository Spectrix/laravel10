<?php

namespace App\Http\Controllers;
use App\Models\Golongan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        $golonganData = $this->getGolonganData();
        return view('index', compact('pegawai','golonganData'));
    }
    private function getGolonganData()
    {
        return Golongan::withCount('pegawai')->pluck('pegawai_count', 'nm_golongan')->toArray();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            Pegawai::create($request->all());
            session()->flash('success', 'Data Berhasil Disimpan');
            return redirect()->route('pegawai.index');
             }catch (\Exception $e){
               session()->flash('error', 'Data Gagal Disimpan');
             }
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        try{
            $pegawai->update($request->all());
            session()->flash('success', 'Data Berhasil Diupdate');
            return redirect()->route('pegawai.index');
            }catch (\Exception $e){
            session()->flash('error', 'Data gagal dihapus');
    }        
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        try{
            $pegawai->delete();
            session()->flash('success', 'Data Berhasil Dihapus');
            return redirect()->route('pegawai.index');
            } catch (\Exception $e){
                session()->flash('error', 'Data gagal Dihapus');
            }
            
        }
    }

