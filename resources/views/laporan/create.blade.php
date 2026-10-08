@extends('layouts.app')

@section('title', 'Form Pelaporan')

@section('content')
    <div class="box">
        <h2>Form Pelaporan Banjir</h2>
        <p>Isi data berikut untuk melaporkan kejadian banjir di wilayah Anda.</p>

        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf

            <label for="nama">Nama Pelapor</label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" required>
            @error('nama') <div class="error">{{ $message }}</div> @enderror

            <label for="lokasi">Lokasi Kejadian (Kecamatan/Desa)</label>
            <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}" required>
            @error('lokasi') <div class="error">{{ $message }}</div> @enderror

            <label for="tinggi">Tinggi Genangan Air (cm)</label>
            <input type="number" id="tinggi" name="tinggi" min="0" value="{{ old('tinggi') }}" required>
            @error('tinggi') <div class="error">{{ $message }}</div> @enderror

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>
@endsection
