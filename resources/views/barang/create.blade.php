@extends('master')

@section('judul')
    <h1>Halaman Create</h1>
@endsection

@section('isi')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tambahkan Barang</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <div class="form-group">
                                <label for="nama_barang">Barang</label>
                                <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                    placeholder="Masukan nama barang">
                            </div>
                        </div>
                        <div class="col-md-2 col-12">
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal"
                                    placeholder="Masukan tanggal">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="harga_awal">Harga Awal</label>
                                <input type="text" name="harga_awal" class="form-control" id="harga_awal"
                                    placeholder="Masukan harga awal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi_barang">Tambah Deskripsi</label>
                        <textarea class="form-control" rows="3" id="deskripsi_barang" name="deskripsi_barang"
                            placeholder="Deskripsi barang anda"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Barang</label>
                        <img class="img-preview img-fluid col-sm-5 mb-3" alt="">
                        <input class="form-control @error('image')is-invalid @enderror" type="file" id="image"
                            name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-6 d-flex justify-content-start">
                            <a href="{{ route('barang.index') }}" class="btn btn-outline-info me-1 mb-1">
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
