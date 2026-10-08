@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <div class="box">
        <h2>Konfirmasi Laporan</h2>

        <x-alert type="success" message="Laporan banjir Anda berhasil dikirim." />

        <table class="detail">
            <tr><td>Nama Pelapor</td><td>{{ $laporan['nama'] }}</td></tr>
            <tr><td>Lokasi Kejadian</td><td>{{ $laporan['lokasi'] }}</td></tr>
            <tr><td>Tinggi Genangan Air</td><td>{{ $laporan['tinggi'] }} cm</td></tr>
        </table>

        <a href="{{ route('laporan.create') }}" class="btn">Buat Laporan Baru</a>
    </div>
@endsection
