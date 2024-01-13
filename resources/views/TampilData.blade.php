@extends('layout.editdata')

@section('container3')

<form method="POST" action="{{ route('UpdateData', $data->id) }}" class="row g-1 form-container">
    <h2>Edit Data</h2>
    
    <form class="row g-3">
        @csrf

        <div class="col-md-6 mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" required value="{{ $data->nik }}">
            @error('nik')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-md-6 mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ $data->name }}">
            @error('name')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" name="jenis_kelamin" required value="{{ $data->jenis_kelamin }}">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            @error('jenis_kelamin')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required>{{ $data->alamat }}</textarea>
            @error('alamat')
               <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>


        <div class="col-md-6 mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" required value="{{ $data->tgl_lahir }}">
            @error('tgl_lahir')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="agama" class="form-label">agama</label>
            <select class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama" required value="{{ $data->agama }}">
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="khatolik">khatolik</option>
                <option value="budha">budha</option>
                <option value="khongucu">khongucu</option>
            </select>
            @error('agama')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ $data->email }}">
            @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required value="{{ $data->password }}">
            @error('password')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror

        </div>

        <div class="col-md-6 mb-3">
            <label for="jenis_kartu_atm" class="form-label">jenis kartu atm</label>
            <select class="form-control @error('jenis_kartu_atm') is-invalid @enderror" id="jenis_kartu_atm" name="jenis_kartu_atm" required value="{{ $data->jenis_kartu_atm }}">
                <option value="bri">bri</option>
                <option value="mandiri">mandiri</option>
                <option value="bca">bca</option>
                <option value="sinarmas">sinarmas</option>
            </select>
            @error('jenis_kartu_atm')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="no_rek" class="form-label">Nomor Rekening</label>
            <input type="text" class="form-control @error('no_rek') is-invalid @enderror" id="no_rek" name="no_rek" required value="{{ $data->no_rek }}">
            @error('no_rek')
                 <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" class="btn btn-danger" onclick="location.href='/DataPengguna'">Keluar</button>
        </div>

    </form>

@endsection
