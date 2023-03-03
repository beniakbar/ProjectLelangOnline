@extends('master')

@section('judul')
@endsection

@section('content')

    <section class="content">
        <div class="container-fluid">

            @if (!empty($lelangs))
                <div class="row">
                    <div class="col-md-5">
                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if ($lelangs->barang->image)
                                        <img class="img-fluid mt-3" src="{{ asset('storage/' . $lelangs->barang->image) }}"
                                            alt="User profile picture">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /.col -->
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="details">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="inputName">Nama Barang</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="inputName"
                                                        value="{{ $lelangs->barang->nama_barang }}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail">Harga Awal</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="inputEmail"
                                                            value="@currency($lelangs->barang->harga_awal)"disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail">Harga akhir</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="inputEmail"
                                                            value="@currency($lelangs->harga_akhir)"disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-9">
                                                    <label for="inputName2">Tanggal Lelang</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="inputName2"
                                                            value="{{ \Carbon\Carbon::parse($lelangs->tanggal_lelang)->format('j F Y') }}"
                                                            disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-3">
                                                    <label for="inputEmail">Status</label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control" id="inputEmail"
                                                            value="{{ $lelangs->status }}"disabled>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail">Pemenang Lelang</label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" id="inputEmail"
                                                        value="{{ $lelangs->pemenang }}"disabled>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputExperience">Deskripsi Barang</label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" id="inputExperience" disabled>{{ $lelangs->barang->deskripsi_barang }}</textarea>
                                                </div>
                                            </div>
                                            @if (auth()->user()->level == 'admin')
                                                <a href="{{ route('lelangadmin.index') }}"
                                                    class="btn btn-outline-info">Kembali</a>
                                            @elseif(auth()->user()->level == 'masyarakat')
                                                <a href="{{ route('dashboard.masyarakat') }}"
                                                    class="btn btn-outline-info">Kembali</a>
                                            @elseif(auth()->user()->level == 'petugas')
                                                <a href="{{ route('lelang.index') }}"
                                                    class="btn btn-outline-info">Kembali</a>
                                            @endif
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endif
        </div>
    </section>
@endsection
