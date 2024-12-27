@extends('templates.main_admin')
@section('title', 'Poliklinik - Index')
@section('content')
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="peers ai-c jc-sb gap-40 mB-5">
                    <div class="peer peer-greed">
                        <h4>Data Poliklinik</h4>
                    </div>
                    <div class="peer mR-0">
                        <div class="text-end">
                            <a href="{{ route('admin.poliklinik.create') }}" class="btn cur-p btn-primary btn-color">Tambah Poliklinik</a>
                        </div>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Poliklinik</th>
                            <th scope="col">Keterangan</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($poliklinik_list as $key => $poliklinik)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $poliklinik->nama_poli }}</td>
                            <td>{{ \Illuminate\Support\Str::limit($poliklinik->keterangan, 100, '...') }}</td>
                            <td>
                                <a href="{{ route('admin.poliklinik.edit', $poliklinik->id) }}" class="btn cur-p btn-info btn-color">Edit</a>
                                <form action="{{ route('admin.poliklinik.destroy', $poliklinik->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                {{ $poliklinik_list->links() }}
            </div>
        </div>
    </div>
@endsection
