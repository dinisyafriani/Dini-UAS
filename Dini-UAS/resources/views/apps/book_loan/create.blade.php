@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Peminjaman</h5></div>
            <p class="card-text">
            <form action="{{ route('book_loan') }}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 mt-2">
                    <label for="">Peminjam</label>
                    <select name="borrower_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($borrower as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Buku</label>
                    <select name="book_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($book as $item)
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Tgl Peminjaman</label>
                    <input type="date" name="start_date" class="form-control">
                  </div>
                <div class="form-group mt-2 mt-2">
                    <label for="">Tgl Pengembalian</label>
                    <input type="date" name="end_date" class="form-control">
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