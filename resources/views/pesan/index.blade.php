@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card mt-6">
                <div class="card-body">
<div class="row justify-content-center">
    <div class="col-md-7">
        <main class="form-pesan">
            <form action="{{ url('pesan/index') }}" method="POST">
            <h1 class="d-block text-center h3 fw-normal">Pesan Tiket</h1>
        
            <div class="form-floating">
                <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" id="floatingInput" placeholder="UserName" required>
                <label for="floatingInput">Nama</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input 
                id="isian-telpon"
                type="tel"
                name="contact"
                value="{{ old('contact') }}"
                 class="form-control" id="floatingContact" placeholder="Contact" required>
                <label for="floatingInput">Contact</label>
            </div>
            <div class="from-floating">
                <h3 class="d-block h3 fw-normal"> Mau Kemana?</h3>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingDate" placeholder="Kota,Hotel" required>
                <label for="floatingInput">Kota,Hotel,Tempat-Wisata</label>
            </div>
            <div class="form-floating">
                <input type="Date" class="form-control" id="floatingDate" placeholder="Date" required>
                <label for="floatingInput">Pergi</label>
            </div>
            <div class="form-floating">
                <input type="Date" class="form-control" id="floatingDate" placeholder="Date" required>
                <label for="floatingInput">Pulang</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit" >Pesan</button> 
            </form>
        </main>
    </div>
@endsection
