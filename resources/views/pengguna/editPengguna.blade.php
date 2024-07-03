@extends('master')
@section('title', 'Edit Pengguna')
@section('content')
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card card-info">
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="card-header">
                    <h3 class="card-title">Edit Pengguna</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengguna.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" value="{{ $data->name }}" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Username</label>
                            <input type="text" value="{{ $data->username }}" name="username" class="form-control"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="name">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-block btn-info float-right">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>

@endsection
