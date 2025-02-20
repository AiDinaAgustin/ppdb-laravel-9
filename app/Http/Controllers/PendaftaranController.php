<?php

namespace App\Http\Controllers;

use App\Models\Hasilspk;
use App\Models\SiswaCalon;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;


class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pendaftaran');
    }

    public function hasil()
    {
        return view('hasilpendaftaran', [
            'siswacalons' => Hasilspk::orderByDesc('skor')->with('siswacalon')->get()
        ]);
    }

    public function hapusData($id)
    {
        $data = SiswaCalon::find($id);
        
        $data->delete();
        return redirect('/admin/mendaftar')->with('toast_success', 'Data berhasil dihapus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request)
{
    Log::info('Data yang diterima:', $request->all());

    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'nisn' => 'required|max:10',
        'no_telp' => 'required|max:13',
        'agama' => 'required',
        'tanggal_lahir' => 'required|date',
        'tempat_lahir' => 'required',
        'asal_sekolah' => 'required',
        'jarak' => 'required|numeric',
        'jurusan' => 'required',
        'jk' => 'required',
        'nilai_indo' => 'required|numeric',
        'nilai_ipa' => 'required|numeric',
        'nilai_mtk' => 'required|numeric',
        'nilai_ing' => 'required|numeric',
        'alamat' => 'required',
        'email' => 'required|email',
    ]);

    Log::info('Data yang divalidasi:', $validatedData);

    // Cek apakah koneksi ke database bisa dilakukan
    try {
        DB::connection()->getPdo();
        Log::info('Koneksi database berhasil');
    } catch (\Exception $e) {
        Log::error('Koneksi database gagal: ' . $e->getMessage());
        return response()->json(['error' => 'Gagal terhubung ke database'], 500);
    }

    try {
        $siswa = SiswaCalon::create($validatedData);
        Log::info('Data berhasil disimpan:', ['id' => $siswa->id]);
    } catch (\Exception $e) {
        Log::error('Gagal menyimpan data: ' . $e->getMessage());
        return response()->json(['error' => 'Gagal menyimpan data'], 500);
    }

    Alert::success('Berhasil', 'Data anda sudah terekap, Silahkan tunggu info pengumuman!');
    return redirect('/hasil');
}

}
