<?php

namespace App\Http\Controllers;

use App\Models\Rambu;
use Illuminate\Http\Request;
use App\Models\Traffic;
use App\Models\RambuDokumentasi;
use Illuminate\Support\Facades\Storage;

class RambuController extends Controller
{
    public function index(Request $request)
    {
        $query = Rambu::query();

        if ($request->has('jenis') && $request->jenis !== '') {
            $query->where('jenis', $request->jenis);
        }

        $rambus = $query->get();
        return view('rambu.index', compact('rambus'));
    }

    // public function create()
    // {
    //     return view('rambu.create');
    // }
    public function create()
    {
        $trafficData = Traffic::all(); // Ambil semua data dari tabel traffic
        return view('rambu.create', compact('trafficData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'namarambu' => 'nullable',
            'jenisrambu' => 'required',
            'titikrambu' => 'required|integer',
            'kondisirambu' => 'required|integer',
            'tahun' => 'required|integer',
            'dokumentasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            $file = $request->file('dokumentasi');
            $path = $file->store('public/rambu');
            $data['dokumentasi'] = str_replace('public/', '', $path);
        }

        Rambu::create($data);

        return redirect()->route('rambu.index')->with('success', 'Rambu created successfully.');
    }

    // MULTI DOKUMENTASI
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'jenis' => 'required',
    //         'namarambu' => 'nullable',
    //         'jenisrambu' => 'required',
    //         'titikrambu' => 'required|integer',
    //         'kondisirambu' => 'required|integer',
    //         'tahun' => 'required|integer',
    //         'dokumentasi.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    //     ]);

    //     $data = $request->all();
    //     $dokumentasi = [];

    //     if ($request->hasFile('dokumentasi')) {
    //         foreach ($request->file('dokumentasi') as $file) {
    //             $path = $file->store('public/rambu');
    //             $dokumentasi[] = str_replace('public/', '', $path);
    //         }
    //     }

    //     $data['dokumentasi'] = json_encode($dokumentasi);
    //     Rambu::create($data);

    //     return redirect()->route('rambu.index')->with('success', 'Rambu created successfully.');
    // }

    // public function update(Request $request, Rambu $rambu)
    // {
    //     $request->validate([
    //         'jenis' => 'required',
    //         'namarambu' => 'nullable',
    //         'jenisrambu' => 'required',
    //         'titikrambu' => 'required|integer',
    //         'kondisirambu' => 'required|integer',
    //         'tahun' => 'required|integer',
    //         'dokumentasi.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    //     ]);

    //     $data = $request->all();
    //     $dokumentasi = json_decode($rambu->dokumentasi, true) ?? [];

    //     if ($request->hasFile('dokumentasi')) {
    //         foreach ($request->file('dokumentasi') as $file) {
    //             $path = $file->store('public/rambu');
    //             $dokumentasi[] = str_replace('public/', '', $path);
    //         }
    //     }

    //     $data['dokumentasi'] = json_encode($dokumentasi);
    //     $rambu->update($data);

    //     return redirect()->route('rambu.index')->with('success', 'Rambu updated successfully.');
    // }


    // public function edit(Rambu $rambu)
    // {
    //     return view('rambu.edit', compact('rambu'));
    // }
    public function edit(Rambu $rambu)
    {
        $trafficData = Traffic::all(); // Ambil data dari tabel traffic
        return view('rambu.edit', compact('rambu', 'trafficData'));
    }

    public function update(Request $request, Rambu $rambu)
    {
        $request->validate([
            'jenis' => 'required',
            'namarambu' => 'nullable',
            'jenisrambu' => 'required',
            'titikrambu' => 'required|integer',
            'kondisirambu' => 'required|integer',
            'tahun' => 'required|integer',
            'dokumentasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            if ($rambu->dokumentasi) {
                Storage::delete('public/' . $rambu->dokumentasi);
            }

            $file = $request->file('dokumentasi');
            $path = $file->store('public/rambu');
            $data['dokumentasi'] = str_replace('public/', '', $path);
        }

        $rambu->update($data);

        return redirect()->route('rambu.index')->with('success', 'Rambu updated successfully.');
    }

    public function destroy(Rambu $rambu)
    {
        if ($rambu->dokumentasi) {
            Storage::delete('public/' . $rambu->dokumentasi);
        }

        $rambu->delete();

        return redirect()->route('rambu.index')->with('success', 'Rambu deleted successfully.');
    }
}