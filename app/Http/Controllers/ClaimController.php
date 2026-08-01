<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClaimController extends Controller
{
    //
    // public function index()
    // {
    //     return view('claims.index');
    // }
    public function create($reportId)
    {
        $report = Report::findOrFail($reportId);
        return view('claims.create', compact('report'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'report_id' => 'required|exists:reports,id',
            'deskripsi_klaim' => 'required|string',
        ]);

        Claim::create([
            'user_id' => Auth::user()->id,
            'report_id' => $request->report_id,
            'deskripsi_klaim' => $request->deskripsi_klaim,
            'status' => 'pending',
        ]);

        return redirect()->route('items.index')->with('success', 'Klaim berhasil diajukan. Menunggu verifikasi.');
    }

    public function verifikasiIndex()
    {
        $claims = Claim::where('status', 'pending')->with(['user', 'report.item'])->get();
        return view('claims.verify', compact('claims'));
    }

    public function verifikasiUpdate(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:disetujui,ditolak',
        ]);
        try {
            DB::beginTransaction();
            $claim = Claim::findOrFail($id);
            $claim->status = $request->status;
            $claim->save();
            $report = $claim->report;
            $item = $report->item;
            if ($request->status === 'disetujui') {
                // Update status report juga
                $report->status = 'disetujui';
                $report->save();
                // Tambahkan ke user_items
                $claim->user->items()->attach($item->id, [
                    'role' => 'pemilik'
                ]);
                // throw new \Exception("Simulasi error");
                // Hapus item (bisa soft delete atau hard delete tergantung setup)
                $item->delete();
            } elseif ($request->status === 'ditolak') {
                // Bisa update status report jadi 'ditolak' juga jika perlu
                $report->status = 'ditolak';
                $report->save();
            }
            DB::commit();
            return redirect()->back()->with('success', 'Klaim berhasil diverifikasi.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memverifikasi klaim.');
        }
    }
}
