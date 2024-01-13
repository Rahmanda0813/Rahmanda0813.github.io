@extends('layout.dashboardOp')
@section('container2')
<br>
<br>
<br>
<div class="judul">
    <h1>Daftar Pengguna</h1>
</div>
<br>

<div class="table-responsive">

<table class="table table-striped table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NIK</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Agama</th>
            <th scope="col">Email</th>
            <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($userData as $user) 
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nik }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->jenis_kelamin }}</td>
                <td>{{ $user->alamat }}</td>
                <td>{{ $user->tgl_lahir }}</td>
                <td>{{ $user->agama }}</td>
                <td>{{ $user->email }}</td>
                <td>
                   <div class="btn-group">
                       <a href="/TampilData/{{ $user->id }}" class="btn btn-warning btn-edit">Edit</a>

                       <form action="{{ route('hapus_pengguna', $user->id) }}" method="post">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus pengguna?')">Hapus</button>
                      </form>
                    </div>
                </td>     
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
