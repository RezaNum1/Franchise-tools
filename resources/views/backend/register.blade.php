<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Daftar Akun</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/backend/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/backend/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../assets/backend/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../assets/backend/images/favicon.png" />
</head>

<body>
<form action="{{ route('register.process') }}" method="post" autocomplete="off">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth theme-one" style="background: #2c3e50 !important;">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4" style="color: white;">Daftar Akun</h2>
            <hr>
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
            <div class="auto-form-wrapper">
              {{csrf_field()}}
              <div class="form-group">
                <label for="name">Nama</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan nama anda..." name="name" id="name">
                  </div>
                </div>
                <div class="form-group">
                <label for="username">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan username anda..." name="username" id="username">
                  </div>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan email anda..." name="email" id="email">
                  </div>
                </div>
                <div class="form-group">
                <label for="password">Kata Sandi</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Masukkan kata sandi..." name="password" id="password">
                  </div>
                </div>
                <div class="form-group">
                <label for="confirmation">Konfirmasi Kata Sandi</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Konfirmasi kata sandi..." name="confirmation" id="confirmation">
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit" >Daftar</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Sudah memiliki akun?</span>
                  <a href="{{ route('login') }}" class="text-black text-small">Masuk</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/backend/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/backend/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../assets/backend/js/off-canvas.js"></script>
  <script src="../assets/backend/js/misc.js"></script>
  <!-- endinject -->
  </form>
</body>

</html>