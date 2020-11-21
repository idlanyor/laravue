@extends('layouts.admin.panel')
@section('title', 'Data Kelas')
@section('css')
    <!-- Datatables -->

    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Jurusan</h2>

                        <button style="float: right" type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#jurusan" data-whatever="@jurusan"><i class="fa fa-user-plus"></i> Tambah
                            Jurusan
                        </button>
                        {{-- awal modal tambah --}}
                        <form action="{{ route('jurus.store') }}" method="post">
                            @csrf
                            <div class="modal fade" id="jurusan" tabindex="-1" role="dialog" aria-labelledby="jurusanLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="jurusanLabel">Tambah Jurusan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="namajurus" class="col-form-label">Nama Jurusan</label>
                                                    <input type="text" name="nama_jurusan" class="form-control"
                                                        id="namajurus">
                                                </div>
                                                <div class="form-group">
                                                    <label for="singkatan" class="col-form-label">Singkatan</label>
                                                    <input type="text" class="form-control" name="seo_jurusan"
                                                        id="singkatan">
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                                Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- end modal tambah --}}

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Jurusan</th>
                                                <th>Singkatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($jurusan as $data)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $data->nama_jurusan }}</td>
                                                    <td>{{ $data->seo_jurusan }}</td>
                                                    <td>
                                                        <form action="{{ route('jurus.buang', $data->id) }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('Data akan dihapus?')"><i
                                                                    class="fa fa-times"></i> Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Kelas</h2>
                        {{-- awal modal --}}
                        <button style="float: right" type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#kelas" data-whatever="@kelas"><i class="fa fa-user-plus"></i> Tambah
                            Kelas
                        </button>
                        <form action="{{ route('kelas.store') }}" method="post">
                            @csrf
                            <div class="modal fade" id="kelas" tabindex="-1" role="dialog" aria-labelledby="kelasLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="kelasLabel">Tambah Kelas</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="namakelas" class="col-form-label">Nama Kelas</label>
                                                    <input type="text" name="nama_kelas" class="form-control"
                                                        id="namakelas">
                                                </div>
                                                <div class="form-group">
                                                    <label for="singkatan" class="col-form-label">Singkatan</label>
                                                    <input type="text" class="form-control" name="seo_kelas"
                                                        id="singkatan">
                                                </div>

                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i>
                                                Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        {{-- end modal --}}
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelas</th>
                                                <th>Singkatan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($kelas as $data)
                                                <tr>
                                                    <td>{{ ++$num }}</td>
                                                    <td>{{ $data->nama_kelas }}</td>
                                                    <td>{{ $data->seo_kelas }}</td>
                                                    <td>
                                                        <form action="{{ route('kelas.buang', $data->id) }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-danger"
                                                                onclick="return confirm('Data akan dihapus?')"><i
                                                                    class="fa fa-times"></i> Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
@endsection
