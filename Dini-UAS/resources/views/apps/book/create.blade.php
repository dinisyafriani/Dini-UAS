@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; min-height: 550px">
    <div class="col-md-12">
        <div class="card text-left" style="width: 600px">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-body">
            <h4 class="card-title">Data Buku</h4>
            <p class="card-text">
                <form action="{{ route('book') }}" method="POST">
                    @csrf @method('POST')
                    <div class="form-group">
                      <label for="">Judul</label>
                      <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group mt-4">
                      <label for="">Penerbit</label>
                      <input type="text" class="form-control" name="publisher">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Penulis</label>
                        <input type="text" class="form-control" name="writer">
                      </div>
                    <div class="d-flex justify-content-end mt-4">
                        <button class="btn btn-sm btn-success" name="simpan">Simpan</button>
                    </div>
                </form>
            </p>
        </div>
        </div>
    </div>
</div>
@endsection