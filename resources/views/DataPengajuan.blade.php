@extends('layout.dashboardOp')
@section('container2')
    <br>
    <br>
    <br>
    <div class="judul">
        <h1>Data Pengajuan</h1>
    </div>
    <div class="bar container text-end">
        @if($danaBernas)
            <h2>Dana {{ $danaBernas->nama_proyek }}: Rp {{ number_format($danaBernas->jumlah_dana, 2) }}</h2>
        @else
            <h2>Dana habis</h2>
        @endif
    </div>
    <br>
    <div class="table-responsive">
        @if($pengajuanData->isEmpty())
            <p>Tidak ada data pengajuan.</p>
        @else
            <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID Pengajuan</th>
                        <th scope="col">Jenis Pengajuan</th>
                        <th scope="col">Dana Diajukan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Dokumen Pendukung</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Waktu Pengajuan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengajuanData as $pengajuan)
                        <tr>
                            <td>{{ $pengajuan->idpengajuan }}</td>
                            <td>{{ $pengajuan->jenis_pengajuan }}</td>
                            <td>{{ $pengajuan->jumlah_dana }}</td>
                            <td>{{ $pengajuan->deskripsi }}</td>
                            <td>{{ $pengajuan->dokumen_pendukung }}</td>
                            <td>{{ $pengajuan->user_id }}</td>
                            <td>{{ $pengajuan->created_at }}</td>
                            <td>
                                <button type="button" class="btn btn-success" onclick="terimaPengajuan({{ $pengajuan->idpengajuan }})">Terima</button>
                                <a href="{{ route('tolak', ['idpengajuan' => $pengajuan->idpengajuan]) }}" class="btn btn-danger"> Tolak </a>
                            </td>
                        </tr>
                        <script>
                            function terimaPengajuan(idpengajuan) {
                                if (confirm('Anda yakin ingin menerima pengajuan ini?')) {
                                    window.location.href = "{{ url('/terima') }}/" + idpengajuan;
                                }
                            }
                        </script>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
