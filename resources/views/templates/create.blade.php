@extends('templates/base') {{-- mengambil file base.blade.php --}}
@section('title','Tambah Buku')
@section('container') {{-- Mengisi di bagian content --}}
<!-- Main Section -->
<div class="container">
<div class="row">
<!-- Content -->
<div class="col-md-12 mt-3">
<h3>Form menambah Buku</h3>
<form action="/books/store" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="name">Nama Buku</label>
        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Masukkan Nama Buku"> @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="type">Tipe Buku</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type" value="{{ old('type') }}" placeholder="masukkan tipe buku"> @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input class="form-control @error('stock') is-invalid @enderror" type="number" name="stock" id="stock" value="{{ old('stock') }}" placeholder="masukkan stock buku"> @error('stock')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="writer">writer</label>
        <input class="form-control @error('writer') is-invalid @enderror" type="text" name="writer" id="writer" value="{{ old('writer') }}" placeholder="masukkan penulis buku"> @error('writer')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="publisher">publisher</label>
        <input class="form-control @error('publisher') is-invalid @enderror" type="text" name="publisher" id="publisher" value="{{ old('publisher') }}" placeholder="masukkan penerbit buku"> 
        @error('publisher')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="date">Tahun Terbit</label>
        <input class="form-control @error('date') is-invalid @enderror" type="date" name="date" id="date" value="{{ old('date') }}"> @error('date')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group float-right">
        <button class="btn btn-lg btn-danger" type="reset">Reset</button>
        <button class="btn btn-lg btn-primary" type="submit">Submit</button>
    </div>
</form>
</div>
<!-- /.content -->
</div>
</div>
<!-- /.Main Section -->
@endsection