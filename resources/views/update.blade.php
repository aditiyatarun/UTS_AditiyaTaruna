@extends('name')
@section('content')
<div class="container-sm my-5">
    <form action="{{ route('barang.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 border col-xl-6">
                        <div class="mb-3 text-center">
                            <div class="d-flex justify-content-center">
                                <i class="bi bi-plus-square fs-5"></i>
                            </div>
                            <h4>Update Barang</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Barang</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ old('nama') }}" placeholder="Enter nama">
                                @error('nama')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" value="{{ old('harga') }}" placeholder="Enter harga">
                                @error('harga')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="stock" class="form-label">Stock</label>
                                <input class="form-control @error('stock') is-invalid @enderror" type="text" name="stok" id="stok" value="{{ old('stok') }}" placeholder="Enter stok">
                                @error('stock')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="position" class="form-label">satuan</label>
                                <select name="satuan" id="satuan" class="form-select">
                                    @foreach ($satuans as $satuan)
                                        <option value="{{ $satuan->id }}" {{ old('$satuan') == $satuan->id ? 'selected' : '' }}>{{ $satuan->code.' - '.$satuan->name }}</option>
                                    @endforeach
                                </select>
                                @error('position')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="des" class="form-label">Descripstion</label>
                            <textarea class="form-control @error('des') is-invalid @enderror" name="des" id="des" aria-label="With textarea">{{ old('des') }}</textarea>
                            @error('des')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barang.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </form>
</div>
@endsection
