@extends('templates.main_admin')
@section('title', 'Dokter - Index')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="peers ai-c jc-sb gap-40 mB-5">
                    <div class="peer peer-greed">
                        <h4>Data Dokter</h4>
                    </div>
                    <div class="peer mR-0">
                        <div class="text-end">
                            <a href="{{ route('admin.dokter.create') }}" class="btn cur-p btn-primary btn-color">Tambah Dokter</a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Dokter</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">No. HP</th>
                            <th scope="col">Poliklinik</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dokter_list as $dokter)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th> <!-- Gunakan $loop->iteration -->
                            <td>{{ $dokter->nama }}</td>
                            <td>{{ $dokter->alamat }}</td>
                            <td>{{ $dokter->no_hp }}</td>
                            <td>{{ $dokter->poliklinik->nama_poli ?? '-' }}</td> <!-- Cek jika poliklinik null -->
                            <td>
                                <a href="{{ route('admin.dokter.edit', $dokter->id) }}" class="btn cur-p btn-info btn-color">Edit</a>
                                <form action="{{ route('admin.dokter.destroy', $dokter->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE') <!-- Laravel mengenali ini sebagai metode DELETE -->
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $dokter_list->links() }} <!-- Tambahkan navigasi pagination -->
            </div>
        </div>
    </div>
@endsection
