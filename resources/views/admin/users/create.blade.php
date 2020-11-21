@extends('layouts.admin.panel')
@section('title', 'Tambah User')
@section('pagename', 'Tambah User')
@section('css')
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
@endsection
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Form Tambah User</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="container">
                            @if (count($errors)>0)
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="x_content">
                            <form action="{{ route('roleuser.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control"
                                            name="name" placeholder="ex. Roynaldi" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Jabatan<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" class='optional' name="jabatan"
                                            data-validate-length-range="5,15" type="text" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" name="email" class='email'
                                            type="email" />
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" id="password1" name="password"/>

                                        <span style="position: absolute;right:15px;top:7px;" onclick="hideshow()">
                                            <i id="slash" class="fa fa-eye-slash"></i>
                                            <i id="eye" class="fa fa-eye"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Ulangi password<span
                                            class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" name="password_confirmation"
                                            data-validate-linked='password'  />
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Role</label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <div id="level" class="btn-group" data-toggle="buttons">
                                            <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="level" value="admin" class="join-btn">Admin
                                            </label>
                                            <label class="btn btn-info" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="level" value="guru" class="join-btn"> Guru
                                            </label>
                                            <label class="btn btn-warning" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                <input type="radio" name="level" value="siswa" class="join-btn"> Siswa
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid">
                                    <div class="form-group">
                                        <div class="col-md-6 offset-md-3">
                                            <button type='submit' class="btn btn-success"><i class="fa fa-floppy-o"></i> Simpan</button>
                                            <a href="{{ route('roleuser.index') }}" class="btn btn-danger"><i class="fa fa-chevron-circle-left"></i> Kembali</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

    <!-- Javascript functions	-->
    <script>
        function hideshow() {
            var password = document.getElementById("password1");
            var slash = document.getElementById("slash");
            var eye = document.getElementById("eye");

            if (password.type === 'password') {
                password.type = "text";
                slash.style.display = "block";
                eye.style.display = "none";
            } else {
                password.type = "password";
                slash.style.display = "none";
                eye.style.display = "block";
            }

        }

    </script>

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

    </script>

@endsection
@endsection
