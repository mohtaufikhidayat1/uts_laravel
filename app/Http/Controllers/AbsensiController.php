<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensis = Absensi::with('pegawai')->get();
        return view('absensis.index', compact('absensis'));
    }

    public function create()
    {
        $pegawais = Pegawai::all();
        return view('absensis.create', compact('pegawais'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id',
            'shift' => 'required',
            'absensi_masuk' => 'nullable|date',
            'absensi_keluar' => 'nullable|date',
            'mulai_istirahat' => 'nullable|date',
            'selesai_istirahat' => 'nullable|date',
        ]);

        Absensi::create($request->all());
        return redirect()->route('absensis.index');
    }

    public function show(Absensi $absensi)
    {
        return view('absensis.show', compact('absensi'));
    }

    public function edit(Absensi $absensi)
    {
        $pegawais = Pegawai::all();
        return view('absensis.edit', compact('absensi', 'pegawais'));
    }

    public function update(Request $request, Absensi $absensi)
    {
        $request->validate([
            'pegawai_id' => 'required|exists:pegawais,id',
            'shift' => 'required',
            'absensi_masuk' => 'nullable|date',
            'absensi_keluar' => 'nullable|date',
            'mulai_istirahat' => 'nullable|date',
            'selesai_istirahat' => 'nullable|date',
        ]);

        $absensi->update($request->all());
        return redirect()->route('absensis.index');
    }

    public function destroy(Absensi $absensi)
    {
        $absensi->delete();
        return redirect()->route('absensis.index');
    }
}
