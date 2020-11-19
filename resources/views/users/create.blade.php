@extends('layouts.admin.panel')
@section('title', 'Tambah User')
@section('pagename', 'Tambah User')
@section('breadcrumb', 'Tambah User')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Form Tambah User</h4>
            </div>
            <div class="card-body">
                @if (count($errors) > 0)
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ route('roleuser.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <div class="form-check">
                            <input type="radio" name="level" class="form-check-input" value="guru" checked>
                            <label for="level" class="form-check-label">Guru</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="level" class="form-check-input" value="admin">
                            <label for="level" class="form-check-label">Admin</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="level" class="form-check-input" value="siswa">
                            <label for="level" class="form-check-label">Siswa</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                            placeholder="Konfirmasi Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        <a href="{{ url('/roleuser') }}" class="btn btn-outline-info">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
