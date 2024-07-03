@extends('master')
{{-- @section('title', 'Produk') --}}
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dokter</h3>
            <a href="{{ url('dokter/create') }}" class="btn btn-primary float-right">Tambah</a>
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
                        <th>Dokter</th>
                        <th>Spesialisasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->spesialis }}</td>
                            <td>
                                <a href="{{ url('dokter/' . $item->id . '/edit') }}" class="btn btn-warning">Edit</a>
                                <form action="{{ url('dokter/' . $item->id) }}" method="POST" style="display: inline">
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
                        <th>Dokter</th>
                        <th>Spesialisasi</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    {{-- <script>
								document.addEventListener("DOMContentLoaded", function() {
												var deleteButtons = document.querySelectorAll('.delete-btn');

												deleteButtons.forEach(function(button) {
																button.addEventListener('click', function(event) {
																				event.preventDefault();
																				var id = this.getAttribute('data-id');
																				var confirmDelete = confirm('Apakah Anda yakin ingin menghapus pegawai ini?');

																				if (confirmDelete) {
																								document.getElementById('deleteForm' + id).submit();
																				}
																});
												});
								});
				</script> --}}
@endsection
