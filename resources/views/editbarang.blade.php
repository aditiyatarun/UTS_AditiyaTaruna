@extends('name')
@section('content')
<div class="container-sm my-5">
    <form action="{{route('barangs.update', ['barang' => $listbarangdb->id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row justify-content-center">
            <form action="{{  route('barangs.update', ['barang' => $listbarangdb->id])}}" method="POST">
                @csrf
                @method('put')
                <div class="row justify-content-center">
                    <div class="p-5 bg-light rounded-3 border col-xl-6">
                        <div class="mb-3 text-center">
                            <div class="d-flex justify-content-center">
                                <i class="bi bi-plus-square fs-5"></i>
                                <i class="bi bi-box-seam fs-1"></i>
                            </div>
                            <h4>Edit Barang</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama Barang</label>
                                <input class="form-control @error('nama') is-invalid @enderror" type="text" name="nama" id="nama" value="{{ $errors->any() ? old('lastName') : $listbarangdb->name_barang }}" placeholder="Enter nama">
                                @error('nama')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="harga" class="form-label">Harga</label>
                                <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga" id="harga" value="{{ $errors->any() ? old('lastName') : $listbarangdb->harga }}" placeholder="Enter harga">
                                @error('harga')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="stok" class="form-label">Stok</label>
                                <input class="form-control @error('stok') is-invalid @enderror" type="text" name="stok" id="stok" value="{{ $errors->any() ? old('lastName') : $listbarangdb->stok}}" placeholder="Enter stok">
                                @error('stock')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="satuan" class="form-label">satuan</label>
                                <select name="satuan" id="satuan" class="form-select">
                                    @php
                                        $selected = "";
                                        if ($errors->any())
                                            $selected = old('satuan');
                                        else
                                            $selected = $listbarangdb->satuan_id;
                                    @endphp
                                    @foreach ($satuans as $satuan)
                                        <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>{{ $satuan->code.' - '.$satuan->name }}</option>
                                    @endforeach
                                </select>
                                @error('position')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="des" class="form-label">Deskripsi</label>
                            <textarea class="form-control @error('des') is-invalid @enderror" name="des" id="des" aria-label="With textarea">{{ $errors->any() ? old('lastName') : $listbarangdb->deskripsi}}</textarea>
                            @error('des')
                                    <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 d-grid">
                                <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                            </div>
                            <div class="col-md-6 d-grid">
                                <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> edit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </form>
</div>
@endsection
