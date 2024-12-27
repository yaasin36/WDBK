@extends('templates.main_admin')
@section('title', 'Poliklinik - Edit')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
            <div class="bgc-white p-20 bd">
                <h4 class="c-grey-900">Edit Poliklinik</h4>
                
                <!-- Menampilkan pesan error validasi -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Menampilkan pesan sukses -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="mT-30">
                    <form action="{{ url('/admin/poliklinik/' . $poliklinik->id . '/edit') }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Menentukan metode PUT untuk update -->

                        <div class="form-group">
                            <label class="form-label">Nama Poliklinik</label>
                            <input value="{{ old('nama_poli', $poliklinik->nama_poli) }}" type="text" name="nama_poli" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control">{{ old('keterangan', $poliklinik->keterangan) }}</textarea>
                        </div>

                        <button type="submit" class="mt-3 btn btn-primary btn-color">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
