@extends('layouts.master')

@section('content')
<div class="container my-5">
    <div class="jumbotron bg-light p-5 rounded shadow-sm">
        <h2>Riwayat Barang Saya</h2>
        @if ($items->isEmpty())
            <p class="text-muted">Anda belum pernah melaporkan atau menemukan barang.</p>
        @else
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Peran Saya</th>
                        <th>Warna</th>
                        <th>Tipe</th>
                        <th>Status Laporan</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        @php
                            $report = $item->reports->first();
                        @endphp
                        <tr>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ ucfirst($item->pivot->role) }}</td>
                            <td>{{ $item->warna }}</td>
                            <td>{{ ucfirst($item->type) }}</td>
                            <td>
                                @if ($report)
                                    @if ($report->status === 'pending')
                                        <span class="badge bg-warning text-dark">Menunggu</span>
                                    @elseif ($report->status === 'disetujui')
                                        <span class="badge bg-success">Disetujui</span>
                                    @else
                                        <span class="badge bg-danger">Ditolak</span>
                                    @endif
                                @else
                                    <span class="text-muted">-</span>
                                @endif
                            </td>
                            <td>{{ $report->tanggal ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
