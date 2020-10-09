@extends('templates/base')@section('title','Books Database')@section('container')
<div class="container">
    <div class="row">
        <div class="my-4 col-12">
            <h1 class="float-left">Daftar Buku
            </h1>
            <a class="btn btn-primary float-right mt-2" href="/books/create/" role="button">
                Tambah Buku
            </a>
        </div>
        <div class="col-12">
            <table class="table table-stripped">
                <thead class="thead-primary">
                    <tr>
                        <th class="text-center">No</th>
                        <th>Nama Buku</th>
                        <th>Tipe Buku</th>
                        <th class="text-center">Stock</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th class="text-center">Terbit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                    @foreach($books as $book)
                    <tr>
                        <td class="text-center">1</td>
                        <td>{{$book->nama_buku}}</td>
                        <td>{{$book->tipe_buku}}</td>
                        <td class="text-center">{{$book->stock_buku}}</td>
                        <td>{{$book->penulis}}</td>
                        <td>{{$book->penerbit}}</td>
                        <td class="text-center">{{$book->tanggal_terbit}}</td>
                        <td>
                            <a href="/books/edit/{{ $book->id_buku }}" class="badge badge-success">edit</a>
                            <a href="/books/destroy/{{$book->id_buku}}" class="badge badge-danger" onclick="return confirm('yakin?');">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
