@extends('layouts.master')
@section('content')
    <div class="container my-5">
        <div class="jumbotron bg-light p-5 rounded shadow-sm">
            <h1>Welcome</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('success2'))
                <div class="alert alert-success">
                    {{ session('success2') }}
                </div>
            @endif
        </div>
    </div>
@endsection
