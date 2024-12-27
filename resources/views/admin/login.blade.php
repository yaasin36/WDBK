@extends('templates.auth')
@section('title','Login Admin')
@section('content')
<div class="peers ai-s fxw-nw h-100vh" style="background: linear-gradient(135deg, #6A11CB 0%, #2575FC 100%); font-family: 'Poppins', sans-serif;">
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
    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r shadow-md" style="min-width: 320px; border-radius: 15px;">
        <h4 class="fw-bold text-center text-dark mB-40">Welcome Back, Admin!</h4>
        <form action="" method="POST" class="d-flex flex-column gap-4">
            @csrf
            <div class="form-group">
                <label class="text-normal text-dark form-label">Name</label>
                <input type="text" class="form-control border-0 shadow-sm" name="nama" placeholder="Enter your name" style="border-radius: 10px;">
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
          </div>
          
          <!-- Link ke Font Awesome untuk ikon mata -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
          
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <label class="checkbox-container">
                        <input type="checkbox">
                        <span class="checkmark"></span> Remember me
                    </label>
                </div>
                <div>
                    <button class="btn btn-primary btn-color w-100" style="background: linear-gradient(135deg, #6A11CB 0%, #2575FC 100%); border: none; padding: 10px 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">Login</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
  document.getElementById("togglePassword").addEventListener("click", function () {
      const passwordField = document.getElementById("password");
      const passwordIcon = document.querySelector("#togglePassword i");

      if (passwozrdField.type === "password") {
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
