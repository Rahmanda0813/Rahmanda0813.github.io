@extends('layout.dashboardMain')

@section('container')
    <br>
    <br>
    <br>
    <h1>Riwayat Client</h1>
    <br>
    @if(session()->has('success'))
        <br>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
@endsection
