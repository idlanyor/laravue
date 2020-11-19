@extends('layouts.admin.panel')
@section('customcss')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endsection
@section('title', 'Manajemen User')
@section('pagename', 'Manajemen User')
@section('breadcrumb', 'Manajemen User')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Data User
                    <a href="{{ route('roleuser.create') }}" class="btn btn-success" style="float: right">
                        <i class="fas fa-user-plus" aria-hidden="true"></i> Tambah User</a>
                </h4>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                @if (Session::has('pesan'))
                    <div class="alert alert-success">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->level }}</td>
                                <td>
                                    <form action="{{ route('roleuser.destroy', $data->id) }}" method="POST">
                                        @csrf <a href="{{ route('roleuser.edit', $data->id) }}" class="btn btn-info"><i
                                                class="fas fa-pencil-alt"></i> Edit</a>
                                        <button class="btn btn-danger"
                                            onclick="return confirm('Anda Yakin ingin menghapus?')"><i
                                                class="fas fa-times"></i>
                                            Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@section('script')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endsection
@endsection
