@extends('layouts.master')

@section('content')
    <div class="container my-5">
        <div class="jumbotron bg-light p-5 rounded shadow-sm">
            <h1>Buat Laporan</h1>

            {{-- Pesan error dari validasi --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Terjadi kesalahan:</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('reports.store') }}" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <td>Nama Barang</td>
                        <td>
                            <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Warna</td>
                        <td>
                            <input type="text" name="warna" class="form-control" value="{{ old('warna') }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Ciri Khusus</td>
                        <td>
                            <input type="text" name="ciri_khusus" class="form-control" value="{{ old('ciri_khusus') }}">
                        </td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>
                            <input type="file" name="foto" class="form-control" accept="image/*">
                        </td>
                    </tr>
                    <tr>
                        <td>Tipe</td>
                        <td>
                                <select name="type" class="form-control" required>
                                <option value="">-- Pilih Tipe --</option>
                                <option value="hilang" {{ old('type') == 'hilang' ? 'selected' : '' }}>Hilang</option>
                                <option value="ditemukan" {{ old('type') == 'ditemukan' ? 'selected' : '' }}>Ditemukan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Lokasi</td>
                        <td>
                            <input type="text" name="lokasi" class="form-control" value="{{ old('lokasi') }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>
                            <input type="date" name="tanggal" class="form-control" value="{{ old('tanggal') }}" required>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            {{-- <a href="{{ route('reports.index') }}" class="btn btn-secondary">Kembali</a> --}}
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
