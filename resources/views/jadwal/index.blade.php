@extends('master')
{{-- @section('title', 'Produk') --}}
@section('content')
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Jadwal</h3>
                    <a href="{{ url('jadwal/create') }}" class="btn btn-primary float-right">Tambah</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <table id="example1" class="table-bordered table-striped table">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->hari }}</td>
                                    <td>
                                        <a href="{{ url('jadwal/' . $item->id . '/edit') }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ url('jadwal/' . $item->id) }}" method="POST"
                                            style="display: inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Hari</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection
