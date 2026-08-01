@extends('layouts.master')

@section('content')
    <div class="container my-5">
        <div class="jumbotron bg-light p-5 rounded shadow-sm">
            <h1>Klaim Barang</h1>
            <form method="POST" action="{{ route('claims.store') }}">
                @csrf
                <input type="hidden" name="report_id" value="{{ $report->id }}">

                <div class="form-group">
                    <label for="deskripsi_klaim">Deskripsi Klaim</label>
                    <textarea name="deskripsi_klaim" class="form-control" rows="4" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Klaim</button>
                <a href="{{ route('items.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
@endsection