@extends('layouts.master')

@section('content')
    <div class="container my-5">
        <div class="jumbotron bg-light p-5 rounded shadow-sm">
            <h1>Daftar Barang</h1>

            @if ($items->isEmpty())
                <p class="text-muted">Belum ada barang yang terdaftar.</p>
            @else
                <table class="table table-bordered mt-4">
                    <thead class="thead-light">
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>Warna</th>
                            <th>Ciri Khusus</th>
                            <th>Lokasi</th>
                            <th>Tipe</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            @foreach ($item->reports as $report)
                                <tr>
                                    <td>
                                        @if ($item->foto)
                                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto Barang" width="80">
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>{{ $item->nama_barang }}</td>
                                    <td>{{ $item->warna }}</td>
                                    <td>{{ $item->ciri_khusus }}</td>
                                    <td>{{ $report->lokasi }}</td>
                                    <td>{{ ucfirst($item->type) }}</td>
                                    <td>{{ $report->tanggal }}</td>
                                    <td>
                                        @if ($item->type === 'ditemukan')
                                            <a href="{{ route('claims.create', $report->id) }}" class="btn btn-sm btn-success">
                                                Klaim
                                            </a>
                                        @else
                                            <span class="text-muted">-</span>
                                        @endif
                                    </td>                                                                   
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
