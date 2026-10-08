@php
    if ($laporan['tinggi'] < 30) {
        $kelas = 'waspada';
    } elseif ($laporan['tinggi'] <= 70) {
        $kelas = 'siaga';
    } else {
        $kelas = 'awas';
    }
@endphp

<div class="card {{ $kelas }}">
    <h3>{{ $laporan['lokasi'] }}</h3>
    <p>Pelapor: {{ $laporan['nama'] }}</p>
    <p>Tinggi genangan: {{ $laporan['tinggi'] }} cm</p>
    <p>
        Status:
        @if ($laporan['tinggi'] < 30)
            <span class="status waspada">Waspada</span>
        @elseif ($laporan['tinggi'] <= 70)
            <span class="status siaga">Siaga</span>
        @else
            <span class="status awas">Awas</span>
        @endif
    </p>
</div>
