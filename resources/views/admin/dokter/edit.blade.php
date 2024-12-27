@extends('templates.main_admin')
@section('title', 'Dokter - Buat')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>

        <div class="masonry-item col-md-12">
            <div class="bgc-white p-20 bd">
                <h4 class="c-grey-900">{{ isset($dokter) ? 'Edit Dokter' : 'Buat Dokter' }}</h4>
                <div class="mT-30">
                    <!-- Form -->
                    <form action="{{ isset($dokter) ? route('admin.dokter.update', $dokter->id) : route('admin.dokter.store') }}" method="POST">
                        @csrf
                        @if(isset($dokter))
                            @method('PUT') <!-- Tambahkan ini untuk edit -->
                        @endif

                        <!-- Poliklinik -->
                        <div class="form-group">
                            <label class="form-label">Poliklinik</label>
                            <select name="id_poli" class="form-control" required>
                                <option value="" disabled {{ !isset($dokter) ? 'selected' : '' }}>Pilih Poliklinik</option>
                                @foreach($poliklinik_list as $poliklinik)
                                    <option 
                                        value="{{ $poliklinik->id }}" 
                                        {{ isset($dokter) && $dokter->id_poli == $poliklinik->id ? 'selected' : '' }}>
                                        {{ $poliklinik->nama_poli }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Nama -->
                        <div class="form-group">
                            <label class="form-label">Nama</label>
                            <input 
                                type="text" 
                                name="nama" 
                                class="form-control" 
                                value="{{ isset($dokter) ? $dokter->nama : old('nama') }}" 
                                required>
                        </div>

                        <!-- Alamat -->
                        <div class="form-group">
                            <label class="form-label">Alamat</label>
                            <input 
                                type="text" 
                                name="alamat" 
                                class="form-control" 
                                value="{{ isset($dokter) ? $dokter->alamat : old('alamat') }}" 
                                required>
                        </div>

                        <!-- No HP -->
                        <div class="form-group">
                            <label class="form-label">No HP</label>
                            <input 
                                type="number" 
                                name="no_hp" 
                                class="form-control" 
                                value="{{ isset($dokter) ? $dokter->no_hp : old('no_hp') }}" 
                                required>
                        </div>
                        
                        <!-- Submit Button -->
                        <button type="submit" class="mt-3 btn btn-primary btn-color">
                            {{ isset($dokter) ? 'Update' : 'Submit' }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
