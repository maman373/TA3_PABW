<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - LaporBanjir</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #eef4fa; color: #1f2d3d; }
        header { background: #0b5394; color: #fff; padding: 20px 0; text-align: center; }
        header h1 { margin: 0; font-size: 28px; }
        header p { margin: 4px 0 0; font-size: 14px; opacity: .9; }
        nav { background: #073763; text-align: center; }
        nav a { display: inline-block; color: #fff; text-decoration: none; padding: 12px 20px; }
        nav a:hover { background: #0b5394; }
        main { max-width: 760px; margin: 24px auto; padding: 0 16px; min-height: 55vh; }
        h2 { margin-top: 0; }
        .box { background: #fff; padding: 24px; border-radius: 8px; box-shadow: 0 1px 4px rgba(0,0,0,.12); }
        label { display: block; margin: 14px 0 6px; font-weight: bold; }
        input { width: 100%; padding: 10px; border: 1px solid #b7c4d1; border-radius: 6px; font-size: 15px; }
        .error { color: #c0392b; font-size: 13px; margin-top: 4px; }
        button, .btn { display: inline-block; margin-top: 18px; padding: 10px 22px; background: #0b5394; color: #fff; border: 0; border-radius: 6px; font-size: 15px; text-decoration: none; cursor: pointer; }
        button:hover, .btn:hover { background: #073763; }
        table.detail { width: 100%; border-collapse: collapse; margin-top: 12px; }
        table.detail td { padding: 10px; border-bottom: 1px solid #e1e8ef; }
        table.detail td:first-child { width: 40%; font-weight: bold; }
        .card { background: #fff; padding: 16px 20px; border-radius: 8px; margin-bottom: 14px; border-left: 6px solid #999; box-shadow: 0 1px 4px rgba(0,0,0,.12); }
        .card h3 { margin: 0 0 6px; }
        .card p { margin: 3px 0; }
        .card.waspada { border-left-color: #f1c40f; }
        .card.siaga { border-left-color: #e67e22; }
        .card.awas { border-left-color: #c0392b; }
        .status { display: inline-block; padding: 3px 12px; border-radius: 12px; color: #fff; font-size: 13px; font-weight: bold; }
        .status.waspada { background: #d4ac0d; }
        .status.siaga { background: #e67e22; }
        .status.awas { background: #c0392b; }
        footer { text-align: center; padding: 18px; font-size: 13px; color: #555; }
    </style>
</head>
<body>
    <header>
        <h1>LaporBanjir</h1>
        <p>Sistem Pelaporan Banjir - BPBD Kabupaten Bandung</p>
    </header>

    <nav>
        <a href="{{ route('laporan.create') }}">Form Pelaporan</a>
        <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        &copy; {{ date('Y') }} BPBD Kabupaten Bandung - LaporBanjir
    </footer>
</body>
</html>
