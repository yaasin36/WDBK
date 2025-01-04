@extends('templates.auth')
@section('title', 'Register Pasien')
@section('content')
    <div class="peers ai-s fxw-nw h-100vh">
        <div class="d-n@sm- peer peer-greed h-100 pos-r" style="background: url('{{url('assets/static/images/bg.jpg')}}') no-repeat center center; background-size: cover; background-attachment: fixed; position: relative;">
            <!-- Overlay Gelap dengan opacity lebih tinggi -->
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.6); border-radius: 15px;"></div>
            <div class="pos-a centerXY">
                <!-- Gambar diperkecil dengan inline style -->
                <div class="bgc-white bdrs-50p pos-r shadow-lg" style="width: 100px; height: 100px;">
                    <img class="pos-a centerXY" src="{{url('assets/static/images/logo.png')}}" alt="" style="width: 80px; height: 80px; object-fit: cover;">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width: 320px;">
            <h4 class="fw-300 c-grey-900 mB-40"><b>Daftar Pasien</b></h4>
            <td></td><form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="text-normal text-dark form-label">Nama</label>
                    <input type="text" class="form-control" name="nama" >
                </div>
                <div class="mb-3">
                    <label class="text-normal text-dark form-label">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label class="text-normal text-dark form-label">Nomor KTP</label>
                    <input type="number" class="form-control" name="no_ktp">
                </div>
                <div class="mb-3">
                    <label class="text-normal text-dark form-label">Nomor Handphone</label>
                    <input type="number" class="form-control" name="no_hp" >
                </div>
                <div class="">
                    <div class="peers ai-c jc-sb fxw-nw">
                        <div class="peer">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <a href="{{ url('pasien/login') }}">Login</a>
                            </div>
                        </div>
                        <div class="peer">
                            <button class="btn btn-primary btn-color w-100" style="background: linear-gradient(135deg, #6A11CB 0%, #2575FC 100%); border: none; padding: 10px 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
