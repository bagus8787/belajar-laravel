@extends('templates/base')
@section('title','Home')
@section('container')

<div class="container"><div class="row"><div class="col-10">
    <h1 class="mt-3">Komandro CCIT FTUI - Tutorial Laravel 6.x</h1>
</div>
    <div class="col-5">
    <p class="text-muted">Apa saja yang kamu pelajari</p>
    </div></div><div class="row">
        <div class="col-12">
        <div class="accordion" id="accordionExample">
        <div class="card">
        <div class="card-header" id="headingOne">
        <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Install Laravel 6.x
        </button>
        </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">Disini kamu akan mengetahui bagaimana menginstall Laravel 6.x
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        Templating Laravel 6.x
        </button>
        </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
        Disini kamu akan mengetahui bagaimana membuat sebuah template untuk halaman website menggunakan Bootstrap dan menghubungkannya ke Laravel 6.x
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" id="headingThree"><h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        CRUD dengan Laravel 6.x
        </button>
        </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
        <div class="card-body">
        Disini kamu akan mengetahui bagaimana memproses data seperti Menampilkan Data, Menambahkan Data, Mengedit Data, dan Menghapus Data menggunakan Laravel 6.x
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" id="headingFour">
        <h2 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Upload Gambar menggunakan Laravel 6.x
        </button>
        </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
        <div class="card-body">Disini kamu akan mengetahui bagaimana upload Gambar menggunakan Laravel 6.x
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" id="headingFive"><h2 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Login menggunakan Laravel 6.x
        </button>
        </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
        <div class="card-body">Disini kamu akan mengetahui bagaimana membuat Login menggunakan Laravel 6.x yang melibatkan Session.
        </div>
        </div>
        </div>
        <div class="card">
        <div class="card-header" id="headingSix"
        ><h2 class="mb-0"><button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Kirim Email menggunakan Laravel 6.x</button></h2></div><div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
        <div class="card-body">Disini kamu akan mengetahui bagaimana Mengirim Pesan Email menggunakan Laravel 6.x.
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        @endsection