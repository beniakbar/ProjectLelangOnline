@extends('master')

@section('judul')
    <h1>Halaman Edit</h1>
@endsection

@section('isi')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">EDIT BARANG YANG INGIN DILELANG</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('barang.update', [$barangs->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <label for="nama_barang">Barang</label>
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                    value="{{ $barangs->nama_barang }}">
                            </div>
                            <div class="col-md-2 col-12">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal"
                                    value="{{ $barangs->tanggal }}">
                            </div>
                            <div class="col-md-5 col-12">
                                <label for="harga_awal">Harga Awal</label>
                                <input type="text" name="harga_awal" class="form-control" id="harga_awal"
                                    value="{{ $barangs->harga_awal }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_barang">Deskripsi Barang Anda</label>
                        <input type="text" name="deskripsi_barang" class="form-control"
                            value="{{ $barangs->deskripsi_barang }}">
                    </div>
                    @if ($barangs->image)
                        <div class="form-group">
                            <label for="foto_barang">Foto Barang</label>
                            <div style="max-height: 350px; overflow:hidden;">
                                <img src="{{ asset('storage/' . $barangs->image) }}" alt="{{ $barangs->image }}"
                                    class="img-fluid mt-3">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Tambah Gambar</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                                id="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-6 d-flex justify-content-start">
                            <a href="{{ route('lelang.index') }}" class="btn btn-outline-info me-1 mb-1">
                                {{ __('Kembali') }}
                            </a>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">
                                {{ __('Reset') }}
                            </button>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </form>
        </div>
    </div>
@endsection
