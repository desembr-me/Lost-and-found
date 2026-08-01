@extends('layouts.master')

@section('content')
    <div class="container my-5">
        <div class="jumbotron bg-light p-5 rounded shadow-sm">
            <h1>Verifikasi Laporan Barang</h1>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if($reports->isEmpty())
                <p class="text-muted">Tidak ada laporan yang menunggu verifikasi.</p>
            @else
                <table class="table table-bordered mt-4">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama Barang</th>
                            <th>Tipe</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Pelapor</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->item->nama_barang }}</td>
                                <td>{{ ucfirst($report->item->type) }}</td>
                                <td>{{ $report->lokasi }}</td>
                                <td>{{ $report->tanggal }}</td>
                                <td>{{ $report->user->name }}</td>
                                <td>
                                    <form action="{{ route('reports.verify', $report->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-success btn-sm" onclick="return confirm('Verifikasi laporan ini?')">Verifikasi</button>
                                    </form>
                                    <form action="{{ route('reports.reject', $report->id) }}" method="POST" style="display:inline">
                                        @csrf
                                        @method('PATCH')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Tolak laporan ini?')">Tolak</button>
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
