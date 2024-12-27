@extends('templates.main_admin')
@section('title', 'Pasien - Buat')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
            <div class="bgc-white p-20 bd">
                <h4 class="c-grey-900">Buat Pasien</h4>
                <div class="mT-30">
                    <form action="{{ url('/admin/pasien/create') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Nama Pasien</label>
                            <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nomor KTP</label>
                            <input type="text" name="no_ktp" class="form-control" value="{{ old('no_ktp') }}">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Nomor HP</label>
                            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
                        </div>
                        <button type="submit" class="mt-3 btn btn-primary btn-color">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
