@extends('layouts.master')

@section('content')
    <h2>Verifikasi Klaim</h2>
    <div class="container my-5">
        <div class="jumbotron bg-light p-5 rounded shadow-sm">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($claims->isEmpty())
                <p class="text-muted">Tidak ada klaim yang menunggu verifikasi.</p>
            @else
                <table class="table table-bordered mt-4">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Pelapor</th>
                            <th>Deskripsi Klaim</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($claims as $claim)
                            <tr>
                                <td>{{ $claim->report->item->nama_barang ?? '-' }}</td>
                                <td>{{ $claim->user->name ?? '-' }}</td>
                                <td>{{ $claim->deskripsi_klaim }}</td>
                                <td>{{ ucfirst($claim->status) }}</td>
                                <td>
                                    <form method="POST" action="{{ route('claims.verify.update', $claim->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="disetujui">
                                        <button type="submit" class="btn btn-sm btn-success">Setujui</button>
                                    </form>
                                    <form method="POST" action="{{ route('claims.verify.update', $claim->id) }}"
                                        class="d-inline">
                                        @csrf
                                        <input type="hidden" name="status" value="ditolak">
                                        <button type="submit" class="btn btn-sm btn-danger">Tolak</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
