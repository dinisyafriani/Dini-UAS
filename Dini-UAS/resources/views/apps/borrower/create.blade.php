@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Peminjam</h5></div>
            <p class="card-text">
            <form action="{{ route('borrower') }}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 mt-2">
                    <label for="">NIK</label>
                    <input type="number" class="form-control" name="nik">
                </div>
                <div class="form-group mt-2 mt-2">
                  <label for="">Nama</label>
                  <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group mt-2 mt-2">
                  <label for="">Nomor</label>
                  <input type="text" name="no_phone" class="form-control">
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