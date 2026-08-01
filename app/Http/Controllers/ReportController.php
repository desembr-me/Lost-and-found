<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    //
    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'warna' => 'required|string|max:100',
            'ciri_khusus' => 'nullable|string',
            'foto' => 'nullable|image|max:2048',
            'type' => 'required|in:hilang,ditemukan',
            'lokasi' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);
        DB::transaction(function () use ($request, $validated) {
            $fotoPath = null;
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('uploads/foto_barang', 'public');
            }
            $item = Item::create([
                'nama_barang' => $validated['nama_barang'],
                'warna' => $validated['warna'],
                'ciri_khusus' => $validated['ciri_khusus'] ?? null,
                'foto' => $fotoPath,
                'type' => $validated['type'],
            ]);
            Report::create([
                'user_id' => Auth::id(),
                'item_id' => $item->id,
                'lokasi' => $validated['lokasi'],
                'tanggal' => $validated['tanggal'],
                'status' => 'pending',
            ]);
            // throw new \Exception("Tes gagal transaksi");
            Auth::user()->items()->attach($item->id, [
                'role' => $request->type === 'hilang' ? 'pelapor' : 'penemu'
            ]);
        });
        return redirect()->route('dashboard')->with('success2', 'Laporan berhasil dikirim.');
    }

    public function history()
    {
        $user = Auth::user();
        $items = $user->items()->with('reports')->get();
        return view('reports.history', compact('items'));
    }
    // Menampilkan semua laporan yang perlu diverifikasi
    public function verifyIndex()
    {
        $reports = Report::where('status', 'pending')->get();
        return view('reports.verify', compact('reports'));
    }

    // Menyetujui laporan
    public function verify($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'disetujui';
        $report->save();

        return redirect()->back()->with('success', 'Laporan disetujui.');
    }

    // Menolak laporan
    public function reject($id)
    {
        $report = Report::findOrFail($id);
        $report->status = 'ditolak';
        $report->save();

        return redirect()->back()->with('error', 'Laporan ditolak.');
    }
}
