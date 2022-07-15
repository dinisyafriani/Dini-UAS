@extends('layouts.dashboard')

@section('content')
<div class="container" style="padding-top: 40px;min-height: 550px">
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="card-title">
                    <h5>Data Pengembalian</h5>
                </div>
                <a href="{{ route('book_return.create') }}">
                    <button class="btn btn-sm btn-success">Tambah</button>
                </a>
                <p></p>
                <table class="table table-stripped">
                    <tr>
                        <th>Tgl Peminjaman</th>
                        <th>Tgl Pengembalian</th>
                        <th>Peminjam</th>
                        <th>Buku</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($book_return as $item)
                    <tr>
                        <td>{{ $item->bookLoan->start_date }}</td>
                        <td>{{ $item->bookLoan->end_date }}</td>
                        <td>{{ $item->bookLoan->borrower->name }}</td>
                        <td>{{ $item->bookLoan->book->title }}</td>
                        <td style="width: 25%">
                        <a href="{{ route('book_return.edit', $item->id) }}">
                            <button class="btn btn-sm btn-warning">Edit</button>
                        </a>
                        <form method="POST" style="display: inline">
                            <input type="text" name="id" value="{{ $item->id }}" style="display:none">
                            <button class="btn btn-sm btn-danger" name="hapus">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </p>
        </div>
    </div>
</div>
@endsection