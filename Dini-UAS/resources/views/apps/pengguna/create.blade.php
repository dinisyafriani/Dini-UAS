@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <form action="{{ route('pengguna') }}" method="POST">
                    @csrf @method('POST')
                    <div class="form-group mt-2 ">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">User Pos</label>
                        <input type="text" class="form-control" name="pos">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">NO. HP</label>
                        <input type="text" class="form-control" name="hp">
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">User Role</label>
                        <select name="role" class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1">Admin</option>
                            <option value="0">Pelanggan</option>
                        </select>
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Status</label>
                        <select name="aktif" class="form-control">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group mt-2 ">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>
@endsection