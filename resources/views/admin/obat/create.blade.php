@extends('templates.main_admin')
@section('title', 'Obat - Buat')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
            <div class="bgc-white p-20 bd">
                <h4 class="c-grey-900">Buat Obat</h4>
                <div class="mT-30">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Nama Obat</label>
                            <input type="text" name="nama_obat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Kemasan</label>
                            <select name="kemasan" class="form-control" required>
                                <option value="" disabled selected>Pilih Kemasan</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Sirup">Sirup</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Injeksi">Injeksi</option>
                                <option value="Salep">Salep</option>
                                <option value="Krim">Krim</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Harga</label>
                            <input type="number" name="harga" class="form-control" required>
                        </div>

                        <button type="submit" class="mt-3 btn btn-primary btn-color">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
