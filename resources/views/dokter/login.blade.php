@extends('templates.auth')
@section('title','Login Dokter')
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
      <h4 class="fw-300 c-grey-900 mB-40">Login Dokter</h4>
      <form action="" method="POST">
        @csrf
        <div class="mb-3">
          <label class="text-normal text-dark form-label">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama ">
        </div>
        <div class="form-group">
          <label class="text-normal text-dark form-label">Password</label>
          <div class="input-group">
              <input id="password" type="password" class="form-control border-0 shadow-sm" name="no_hp" placeholder="Enter your password" style="border-radius: 10px;">
              <div class="input-group-append">
                  <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                      <i class="fa fa-eye"></i>
                  </span>
              </div>
          </div>
        <div class="">
          <div class="peers ai-c jc-sb fxw-nw">
            <div class="peer">
              <div class="checkbox checkbox-circle checkbox-info peers ai-c">
            
              </div>
            </div>
            <div class="peer">
              <button class="btn btn-primary btn-color">Login</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.getElementById("togglePassword").addEventListener("click", function () {
        const passwordField = document.getElementById("password");
        const passwordIcon = document.querySelector("#togglePassword i");
  
        if (passwordField.type === "password") {
            passwordField.type = "text";
            passwordIcon.classList.remove("fa-eye");
            passwordIcon.classList.add("fa-eye-slash");
        } else {
            passwordField.type = "password";
            passwordIcon.classList.remove("fa-eye-slash");
            passwordIcon.classList.add("fa-eye");
        }
    });
  </script>
  
  @endsection