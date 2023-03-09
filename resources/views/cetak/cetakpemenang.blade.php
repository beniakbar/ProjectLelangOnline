<table class="table table-striped table-bordered table-hover" align="center" style="width: 95%">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Penawar</th>
            <th>Nama Barang</th>
            <th>Harga Penawaran</th>
            <th>Tanggal Penawaran</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($histories as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->lelang->barang->nama_barang }}</a></td>
                <td>@currency($item->harga)</td>
                <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('j-F-Y') }}</td>
                <td>{{ $item->status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
