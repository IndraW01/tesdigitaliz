<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        return view('Monitoring.index', [
            'monitorings' => Monitoring::latest()->filter(request('keyword'))->paginate(5)->withQueryString()
        ]);
    }

    public function create()
    {
        return view('Monitoring.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:100',
            'leader' => 'required',
            'client' => 'required',
            'progress' => 'required|numeric',
            'awal' => 'required|date',
            'akhir' => 'required|date|after:awal'
        ]);

        Monitoring::create([
            'judul' => $request->judul,
            'project_leader' => $request->leader,
            'tanggal_mulai' => $request->awal,
            'tanggal_berakhir' => $request->akhir,
            'nama_client' => $request->client,
            'progress' => $request->progress
        ]);

        return redirect()->route('monitoring.index')->with('success', 'Data Berhasil Ditambah');
    }

    public function edit(Monitoring $monitoring)
    {
        return view('Monitoring.edit', [
            'monitoring' => $monitoring
        ]);
    }

    public function update(Request $request, Monitoring $monitoring)
    {
        $validateData = $request->validate([
            'judul' => 'required|max:100',
            'leader' => 'required',
            'client' => 'required',
            'progress' => 'required|numeric',
            'awal' => 'required|date',
            'akhir' => 'required|date|after:awal'
        ]);

        $monitoring->update([
            'judul' => $request->judul,
            'project_leader' => $request->leader,
            'tanggal_mulai' => $request->awal,
            'tanggal_berakhir' => $request->akhir,
            'nama_client' => $request->client,
            'progress' => $request->progress
        ]);

        return redirect()->route('monitoring.index')->with('success', 'Data Berhasil Diubah');
    }

    public function destroy(Monitoring $monitoring)
    {
        $monitoring->delete();

        return redirect()->route('monitoring.index')->with('success', 'Data Berhasil Dihapus');
    }
}
