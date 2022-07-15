@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title"><h5>Data Pengguna</h5></div>
                <form action="{{ route('pengguna') }}" method="POST">
                    @csrf @method('PUT')
                    <input type="hidden" name="id" value="{{ $user->id }}">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{ $user->nama }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="{{ $user->alamat }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">No. Pos</label>
                        <input type="text" class="form-control" name="pos" value="{{ $user->pos }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">No. HP</label>
                        <input type="text" class="form-control" name="hp" value="{{ $user->hp }}">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Status</label>
                        <select name="aktif" class="form-control" value="{{ $user->status }}">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1"
                            @if ($user->aktif == 0)
                                selected
                            @endif
                            >Aktif</option>
                            <option value="0"
                            @if ($user->aktif == 1)
                                selected
                            @endif
                            >Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="">User Role</label>
                        <select name="role" class="form-control" value="{{ $user->role }}">
                            <option value="">-Silahkan Pilih-</option>
                            <option value="1"
                            @if ($user->role == 1)
                                selected
                            @endif
                            >Admin</option>
                            <option value="0"
                            @if ($user->role == 0)
                                selected
                            @endif
                            >Pelanggan</option>
                        </select>
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