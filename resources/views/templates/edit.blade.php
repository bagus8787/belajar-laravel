@extends('templates/base') {{-- mengambil file base.blade.php --}}
@section('title','Edit Buku')
@section('container') {{-- Mengisi di bagian content --}}
<!-- Main Section -->
<div class="container">
<div class="row">
<!-- Content -->
<div class="col-md-12 mt-3">
<h3>Form edit Buku</h3>
<form action="/books/update" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <input class="form-control" type="hidden" name="id" id="id" value="{{ $book->id_buku}}">
        <label for="name">Nama Buku</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ $book->nama_buku }}" placeholder="Masukkan Nama Buku"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Tipe Buku</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="{{ $book->tipe_buku }}" placeholder="masukkan tipe buku"> @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input class="form-control @error('stock') is-invalid @enderror" type="number" name="stock" id="stock" value="{{ $book->stock_buku }}" placeholder="masukkan stock buku"> @error('stock')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="writer">writer</label>
        <input class="form-control @error('writer') is-invalid @enderror" type="text" name="writer" id="writer" value="{{ $book->penulis }}" placeholder="masukkan penulis buku"> @error('writer')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="publisher">publisher</label>
        <input class="form-control @error('publisher') is-invalid @enderror" type="text" name="publisher" id="publisher" value="{{ $book->penerbit }}" placeholder="masukkan penerbit buku"> @error('publisher')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="date">Waktu Terbit</label>
        <input class="form-control @error('date') is-invalid @enderror" type="date" name="date" id="date" value="{{ $book->tanggal_terbit }}"> @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group float-right">
        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
        <button class="btn btn-lg btn-primary" type="submit" value="Simpan Data">Submit</button>
    </div>
</form>
</div>
<!-- /.content -->
</div>
</div>
<!-- /.Main Section -->
@endsection