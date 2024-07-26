<?php

namespace App\Http\Controllers;

use App\Models\Rambu;
use Illuminate\Http\Request;
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

    public function create()
    {
        return view('rambu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'namarambu' => 'required',
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

    public function edit(Rambu $rambu)
    {
        return view('rambu.edit', compact('rambu'));
    }

    public function update(Request $request, Rambu $rambu)
    {
        $request->validate([
            'jenis' => 'required',
            'namarambu' => 'required',
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