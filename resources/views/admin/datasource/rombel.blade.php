@extends('layouts.admin.panel')
@section('title', 'Data Rombel')
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
                        <h2>Data Rombel</h2>
                        <button style="float: right" type="button" class="btn btn-success" data-toggle="modal"
                            data-target="#rombel" data-whatever="@rombel"><i class="fa fa-user-plus"></i> Tambah
                            Rombel
                        </button>
                        {{-- awal modal tambah--}}
                        <form action="{{ route('rombel.store') }}" method="post">
                            @csrf
                            <div class="modal fade" id="rombel" tabindex="-1" role="dialog" aria-labelledby="rombelLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="rombelLabel">Tambah Rombel</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="form-group">
                                                    <label for="namarombel" class="col-form-label">Nama Rombel</label>
                                                    <input type="text" name="nama_rombel" class="form-control"
                                                        id="namarombel">
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_kelas">Jurusan</label>
                                                    <select name="id_kelas" id="id_kelas" class="form-control">
                                                        <option value="" selected>--Pilih Kelas--</option>
                                                        @foreach ($kelas as $data)
                                                            <option value="{{ $data->id }}">{{ $data->seo_kelas }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_jurusan">Jurusan</label>
                                                    <select name="id_jurusan" id="id_jurusan" class="form-control">
                                                        <option value="" selected>--Pilih Jurusan--</option>
                                                        @foreach ($jurusan as $data)
                                                            <option value="{{ $data->id }}">{{ $data->seo_jurusan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="singkatan" class="col-form-label">Singkatan</label>
                                                    <input type="text" class="form-control" name="seo_rombel"
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
                        {{-- end modal tambah--}}
                        {{-- // --}}
                        <div class="container">
                            @if (count($errors) > 0)
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
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
                                                <th>Nama Rombel</th>
                                                <th>Singkatan</th>
                                                <th>Jurusan</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($rombel as $data)
                                                <tr>
                                                    <td>{{ ++$no }}</td>
                                                    <td>{{ $data->nama_rombel }}</td>
                                                    <td>{{ $data->seo_rombel }}</td>
                                                    <td>{{ $data->jurusan->seo_jurusan }}</td>
                                                    <td>{{ $data->kelas->seo_kelas }}</td>
                                                    <td>
                                                        <form action="{{ route('rombel.buang', $data->id) }}" method="post">
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
