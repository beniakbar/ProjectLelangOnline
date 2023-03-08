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
                                                <a href="{{ route('lelang.index') }}"
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
        @if (auth()->user()->level == 'petugas')
            <div class="card">
                <div class="card-header">
                    <strong>Histori Pelelang {{ $lelangs->barang->nama_barang }}</strong>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Pelelang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga Penawaran</th>
                                    <th scope="col">Tanggal Penawaran</th>
                                    <th scope="col">Status</th>
                                    @if (auth()->user()->level == 'petugas')
                                        <th scope="col"></th>
                                    @endif
                                    @if (auth()->user()->level == 'admin')
                                        <th scope="col"></th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($histories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->lelang->barang->nama_barang }}</td>
                                        <td>@currency($item->harga)</td>
                                        <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('j-F-Y') }}</td>
                                        <td>
                                            <span
                                                class="badge {{ $item->status == 'pending' ? 'bg-warning' : 'bg-success' }}">{{ Str::title($item->status) }}</span>
                                        </td>
                                        @if (auth()->user()->level == 'admin')
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('lelang.show', $item->id) }}">
                                                    <i class="fas fa-folder"></i>
                                                    View
                                                </a>
                                            </td>
                                        @elseif(auth()->user()->level == 'petugas')
                                            <td>
                                                <div class="card-body">
                                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                                        data-target="#modal-success">
                                                        Jadikan Pemenang
                                                    </button>
                                                    <div class="modal fade" id="modal-success">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">KONFIRMASI PEMENANG</h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>ANDA YAKIN UNTUK MENJADIKAN
                                                                        "{{ $item->user->name }}" PEMENANG?
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-outline-light"
                                                                        data-dismiss="modal">Close</button>
                                                                    <form
                                                                        action="{{ route('historie.setPemenang', $item->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button type="submit"
                                                                            class="btn btn-primary">YAKIN!</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" style="text-align: center" class="text-danger"><strong>Data
                                                masih
                                                kosong</strong></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </section>
@endsection
