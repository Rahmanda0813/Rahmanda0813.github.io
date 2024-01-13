@extends('layout.dashboardMain')

@section('container')
<br>
<br>
<br>
    <div class="container mt-5">
        <h1>Ajukan Pengusulanmu {{ Auth::user()->name }}</h1>
        

        <form action="{{ route('submit_pengajuan') }}" method="post" class="form-container">
            @csrf
            <div class="mb-3">
                <label for="jenis_pengajuan" class="form-label">Jenis Pengajuan</label>
                <select class="form-select" id="jenis_pengajuan" name="jenis_pengajuan" required>
                    <option value="beasiswa">Beasiswa</option>
                    <option value="pembangunan_infrastruktur">Pembangunan Infrastruktur</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="pangan">Pangan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_dana" class="form-label">dana diajukan</label>
                <input type="number" class="form-control" id="jumlah_dana" name="jumlah_dana" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="dokumen_pendukung" class="form-label">Dokumen Pendukung</label>
                <input type="file" class="form-control" id="dokumen_pendukung" name="dokumen_pendukung">
            </div>
            
            <br>

            <button type="submit" class="btn btn-primary">Submit Pengajuan</button>
        </form>
    </div>
@endsection
