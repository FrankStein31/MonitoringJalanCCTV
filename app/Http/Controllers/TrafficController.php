<?php

namespace App\Http\Controllers;

use App\Models\Traffic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrafficController extends Controller
{
    public function index(Request $request)
    {
        $query = Traffic::query();

        if ($request->has('jenis_traffic')) {
            $query->where('jenis_traffic', $request->jenis_traffic);
        }

        $traffics = $query->get();
        return view('traffic.index', compact('traffics'));
    }

    public function create()
    {
        return view('traffic.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_traffic' => 'required',
            'namajalan' => 'required',
            'statusjalan' => 'nullable',
            'kapasitasjalan' => 'required|integer',
            'volumelalulintas' => 'required|integer',
            'kondisijalan' => 'nullable',
            'lebarjalan' => 'required|integer',
            'dokumentasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            $file = $request->file('dokumentasi');
            $path = $file->store('public/traffic');
            $data['dokumentasi'] = str_replace('public/', '', $path);
        }

        Traffic::create($data);

        return redirect()->route('traffic.index')->with('success', 'Traffic data created successfully.');
    }

    public function edit(Traffic $traffic)
    {
        return view('traffic.edit', compact('traffic'));
    }

    public function update(Request $request, Traffic $traffic)
    {
        $request->validate([
            'jenis_traffic' => 'required',
            'namajalan' => 'required',
            'statusjalan' => 'nullable',
            'kapasitasjalan' => 'required|integer',
            'volumelalulintas' => 'required|integer',
            'kondisijalan' => 'nullable',
            'lebarjalan' => 'required|integer',
            'dokumentasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumentasi')) {
            // Delete old file
            if ($traffic->dokumentasi) {
                Storage::delete('public/' . $traffic->dokumentasi);
            }

            $file = $request->file('dokumentasi');
            $path = $file->store('public/traffic');
            $data['dokumentasi'] = str_replace('public/', '', $path);
        }

        $traffic->update($data);

        return redirect()->route('traffic.index')->with('success', 'Traffic data updated successfully.');
    }

    public function destroy(Traffic $traffic)
    {
        if ($traffic->dokumentasi) {
            Storage::delete('public/' . $traffic->dokumentasi);
        }

        $traffic->delete();

        return redirect()->route('traffic.index')->with('success', 'Traffic data deleted successfully.');
    }
}