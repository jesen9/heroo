@extends('navbar')
@section('title','Order')

@section('content')
    <h1>Isi form pemesanan</h1>
    <form enctype="multipart/form-data" action="/order" method="POST">
        @csrf
        <label for="name">Nama Anda:</label><br>
        <input type="text" id="name" name="name" required placeholder="Nama Lengkap Anda Disini">
        <br><br>

        <label for="email">Email Anda:</label><br>
        <input type="email" id="email" name="email" required placeholder="EmailAndaDisini@email.com">
        <br><br>

        <label for="phone">No. Handphone:</label><br>
        <input type="text" id="phone" name="phone" required placeholder="Nomor Handphone Anda">
        <br><br>

        <label for="service">Layanan Kami:</label><br>
        <select name="service" id="service">
            <option value="0" disabled selected>Pilih Layanan Kami</option>
            <option value="1">Layanan 1</option>
            <option value="2">Layanan 2</option>
            <option value="3">Layanan 3</option>
        </select>
        <br><br>

        <label for="duration">Lama Pengerjaan Proyek:</label><br>
        <select name="duration" id="duration">
            <option value="0" disabled selected>Pilih Lama Pengerjaan Proyek Sampai</option>
            <option value="1">Durasi 1</option>
            <option value="2">Durasi 2</option>
            <option value="3">Durasi 3</option>
        </select>
        <br><br>

        <label for="price">Perkiraan Harga:</label><br>
        <input type="number" id="price" name="price" required placeholder="Rp -,-">
        <br><br>

        <button type="submit">PESAN SEKARANG</button>
    </form>

    @if(session()->has('message'))
        <br>
        <strong>{{session()->get('message')}}</strong>
    @endif
@endsection
