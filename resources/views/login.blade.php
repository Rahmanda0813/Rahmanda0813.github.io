@extends('layout.daftar')
@section('container')

@if(session()->has('success'))
<br>
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{ session('success') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('loginError'))
<br>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{ session('loginError') }}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<main class="form-signin w-100 m-auto">
  <form action="/login" method="POST">
    @csrf
    <br>
    <br>
    <div class="form-container">
    <h1 class="h3 mb-3 fw-normal">Log in</h1>
     <br> 
    <div class="form-floating">
      <input type="nik" name="nik" class="form-control @error('nik') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus required value="{{ old
      ('nik') }}">
      <label for="floatingInput">Masukan NIK anda</label>
      @error('nik')
        <div class="invalid-feedback">http://127.0.0.1:8000
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password yang sudah terdaftar</label>
    </div>
    <button class="btn btn-success w-100 py-2 mt-5" type="submit" >Log in</button>
  </form>
</main>
<center>
<small >Not registered? <a href="/pendaftaran">register now</a></small>
</center>
</div>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
@endsection