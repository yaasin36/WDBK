@extends('templates.main_admin')
@section('title', 'Obat - Edit')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
            <div class="bgc-white p-20 bd">
                <h4 class="c-grey-900">Edit Obat</h4>
                <div class="mT-30">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class="form-label">Nama Obat</label>
                            <input type="text" value="{{$obat->nama_obat}}" name="nama_obat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kemasan</label>
                            <select name="kemasan" class="form-control" required>
                                <option value="" disabled selected>Pilih Kemasan</option>
                                <option value="Tablet" {{ $obat->kemasan == 'Tablet' ? 'selected' : '' }}>Tablet</option>
                                <option value="Sirup" {{ $obat->kemasan == 'Sirup' ? 'selected' : '' }}>Sirup</option>
                                <option value="Kapsul" {{ $obat->kemasan == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
                                <option value="Injeksi" {{ $obat->kemasan == 'Injeksi' ? 'selected' : '' }}>Injeksi</option>
                                <option value="Salep" {{ $obat->kemasan == 'Salep' ? 'selected' : '' }}>Salep</option>
                                <option value="Krim" {{ $obat->kemasan == 'Krim' ? 'selected' : '' }}>Krim</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Harga</label>
                            <input type="number" value="{{intval($obat->harga)}}" name="harga" class="form-control">
                        </div>

                        <button type="submit" class="mt-3 btn btn-primary btn-color">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
