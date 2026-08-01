@extends('layouts.master')

@section('content')

<div class="container my-5">
    <div class="jumbotron bg-light p-5 rounded shadow-sm">
    <h1>Profil Saya</h1>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <td>{{ auth()->user()->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ auth()->user()->email }}</td>
        </tr>
        <tr>
            <th>Alamat</th>
            <td>{{ $profile->alamat ?? '-' }}</td>
        </tr>
        <tr>
            <th>Telepon</th>
            <td>{{ $profile->no_telepon ?? '-' }}</td>
        </tr>
    </table>
    <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profil</a>
</div>
</div>
@endsection
