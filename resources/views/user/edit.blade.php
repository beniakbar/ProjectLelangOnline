@extends('master')

@section('judul')
    <h1>Halaman Edit</h1>
@endsection

@section('isi')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">EDIT DATA USER</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('user.update', [$users->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{ $users->name }}">
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    value="{{ $users->username }}">
                            </div>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="text" name="password" class="form-control" id="password"
                                    value="{{ $users->password }}">
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <label for="telepon">Telepon</label>
                            <input type="numeric" name="telepon" class="form-control" id="telepon"
                                value="{{ $users->telepon }}">
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="level">Otoritas</label>
                                <select name="level" id="level" class="form-select form-control"
                                    data-parsley-required>
                                    <option value="masyarakat">Masyarakat</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                            </div>
                        </div>
                    </div>
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
            </form>
        </div>
    </div>
@endsection
