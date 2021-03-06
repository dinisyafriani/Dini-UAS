@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px; padding-bottom: 40px; min-height: 600px">
    <div class="card" style="width: 600px">
        <div class="card-body">
            <div class="card-title"><h5>Data Pengembalian</h5></div>
            <p class="card-text">
            <form action="{{ route('book_return') }}" method="POST">
                @csrf @method('POST')
                <div class="form-group mt-2 mt-2">
                    <label for="">Peminjam</label>
                    <select name="book_loan_id" id="" class="form-control">
                        <option value="">-Silahkan Pilih-</option>
                        @foreach ($book_loan as $item)
                            <option value="{{ $item->id }}">{{ $item->borrower->name }} | {{ $item->start_date }}</option>
                        @endforeach
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