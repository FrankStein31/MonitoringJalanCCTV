<?php

namespace App\Http\Controllers;

use App\Models\Tlight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TlightController extends Controller
{
    public function index(Request $request)
    {
        $query = Tlight::query();

        if ($request->has('jenis') && $request->jenis !== '') {
            $query->where('jenis', $request->jenis);
        }

        $tlights = $query->get();
        return view('tlight.index', compact('tlights'));
    }

    public function create()
    {
        return view('tlight.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'jenisapill' => 'required',
            'titikapill' => 'required|numeric',
            'kondisiapill' => 'required',
            'tahun' => 'required|integer',
            'dokumentasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            $file = $request->file('dokumentasi');
            $path = $file->store('public/tlight');
            $data['dokumentasi'] = str_replace('public/', '', $path);
        }

        Tlight::create($data);

        return redirect()->route('tlight.index')->with('success', 'Traffic Light created successfully.');
    }

    public function edit(Tlight $tlight)
    {
        return view('tlight.edit', compact('tlight'));
    }

    public function update(Request $request, Tlight $tlight)
    {
        $request->validate([
            'jenis' => 'required',
            'jenisapill' => 'required',
            'titikapill' => 'required|numeric',
            'kondisiapill' => 'required',
            'tahun' => 'required|integer',
            'dokumentasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            if ($tlight->dokumentasi) {
                Storage::delete('public/' . $tlight->dokumentasi);
            }

            $file = $request->file('dokumentasi');
            $path = $file->store('public/tlight');
            $data['dokumentasi'] = str_replace('public/', '', $path);
        }

        $tlight->update($data);

        return redirect()->route('tlight.index')->with('success', 'Traffic Light updated successfully.');
    }

    public function destroy(Tlight $tlight)
    {
        if ($tlight->dokumentasi) {
            Storage::delete('public/' . $tlight->dokumentasi);
        }

        $tlight->delete();

        return redirect()->route('tlight.index')->with('success', 'Traffic Light deleted successfully.');
    }
}