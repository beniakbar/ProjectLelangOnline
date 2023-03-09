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

<h2>LAPORAN LELANG {{ $now->format('d M Y H:i:s') }}</h2>
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
                <th>Harga awal</th>
                <th>Harga Akhir</th>
                <th>Pemenang</th>
                <th>Status</th>
            </tr>
            @foreach ($cetaklelangs as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->barang->nama_barang }}</td>
                    <td>@currency($item->barang->harga_awal)</td>
                    <td>@currency($item->harga_akhir)</td>
                    <td>{{ $item->pemenang }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
