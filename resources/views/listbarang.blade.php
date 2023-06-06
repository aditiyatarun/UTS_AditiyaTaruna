@extends('name')

@section('content')
<div class="container mt-4">
    <div class="row mb-0">
        <div class="col-lg-9 col-xl-10">
            <h4 class="mb-3">{{ $pageTitle }}</h4>
        </div>
    </div>
    <hr>
    <div class="table-responsive border p-3 rounded-3">
        <table class="table table-bordered table-hover table-striped mb-0 bg-white">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Description</th>
                    <th>Harga</th>
                    <th>Satuan</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DataBarang as $Datas)
                    <tr>
                        <td>{{ $Datas->nama }}</td>
                        <td>{{ $Datas->description }}</td>
                        <td>{{ $Datas->harga }}</td>
                        <td>{{ $Datas->satuan->name}}</td>
                        <td>@include('action')</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
