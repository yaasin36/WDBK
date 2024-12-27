@extends('templates.main_admin')
@section('title', 'Pasien - Index')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="peers ai-c jc-sb gap-40 mB-5">
                    <div class="peer peer-greed">
                        <h4>Data Pasien</h4>
                    </div>
                    <div class="peer mR-0">
                        <div class="text-end">
                            <a href="{{ url('/admin/pasien/create') }}" class="btn cur-p btn-primary btn-color">Tambah Pasien</a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No RM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No KTP</th>
                            <th scope="col">No HP</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @forelse ($pasien_list as $pasien)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $pasien->no_rm }}</td>
                                <td>{{ $pasien->nama }}</td>
                                <td>{{ $pasien->alamat }}</td>
                                <td>{{ $pasien->no_ktp }}</td>
                                <td>{{ $pasien->no_hp }}</td>
                                <td>
                                    <a href="{{ url('/admin/pasien/' . $pasien->id . '/edit') }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ url('/admin/pasien/' . $pasien->id . '/delete') }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data pasien.</td>
                            </tr>
                        @endforelse
                    </tbody>

                    <div class="d-flex justify-content-center">
                        {{ $pasien_list->links() }}
                    </div>
                </table>                
            </div>
            <div class="text-center">
                {{ $pasien_list->links() }}
            </div>
        </div>
    </div>
@endsection
