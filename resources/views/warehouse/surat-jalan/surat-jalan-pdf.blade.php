<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            margin: 0;
            padding: 0;
        }
        center {
            margin-bottom: 20px;
        }
        h1, h4 {
            margin: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 40px;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-size: 14px;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        /* Tambahkan margin-bottom pada h4 */
        h4 {
            margin-bottom: 20px;
        }
    </style>
    <title>Cetak Surat Jalan</title>
</head>
<body>
    <center>
        <h1>Cetak Surat Jalan {{ $suratJalan->no_surat_jalan }}</h1>
        <h4>{{ $suratJalan->transfer->tanggal }}</h4>
    </center>

    <!-- Tambahkan margin-bottom pada setiap h4 -->
    <h4>Gudang Asal : {{ $suratJalan->transfer->gudangAsal->nama_gudang }}</h4>
    <h4>Gudang Tujuan : {{ $suratJalan->transfer->gudangTujuan->nama_gudang }}</h4>
    
    <h4>Keterangan : {{ $suratJalan->transfer->keterangan }}</h4>
    
    <table id="barang-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Satuan</th>
                <th>Jenis</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suratJalan->transfer->barangTransfer as $barang)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barang->barang->nama_barang }}</td>
                <td>{{ $barang->barang->stock  }}</td>
                <td>{{ $barang->barang->satuan }}</td>
                <td>{{ $barang->barang->jenis_barang  }}</td>
                <td>{{ $barang->barang->keterangan  }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
