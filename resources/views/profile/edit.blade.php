@extends('layouts.master')

@section('content')
<div class="container my-5">
    <div class="jumbotron bg-light p-5 rounded shadow-sm">
        <h1>Edit Profil</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{ old('alamat', $user->profile->alamat ?? '') }}" required>
            </div>

            <div class="mb-3">
                <label for="no_telepon" class="form-label">No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="{{ old('no_telepon', $user->profile->no_telepon ?? '') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
