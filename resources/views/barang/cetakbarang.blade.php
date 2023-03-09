<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    p {
        text-align: right;
        font-style: bold;
        font-size: 12px
    }

    h4,
    h1,
    h5,
    h2 {
        text-align: center;
        padding-top: inherit;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    tbody tr:nth-child(odd) {
        background-color: #ccc;
    }
</style>

<h2>LAPORAN BARANG LELANG {{ $now->format('d M Y H:i:s') }}</h2>
<h5>Ben's Auction| Copyright © 2023 Ben'saAuction.com. All Rights Reserved</h5>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>
    <div class="form-group">

        <table class="static" align="center" rules="all" border="1px" style="width: 95%">
            <tr>
                <th>No</th>
                <th>Nama barang</th>
                <th>Tanggal</th>
                <th>Harga Awal</th>
                <th>Dibuat Pada</th>
                <th>Diperbaharui Pada</th>
                <th>Deskripsi</th>
            </tr>
            @foreach ($cetakbarangs as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->tanggal }}</td>
                    <td>@currency($item->harga_awal)</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                    <td>{{ $item->deskripsi_barang }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
