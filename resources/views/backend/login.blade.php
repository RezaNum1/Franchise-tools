<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login Franchiese</title>
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
    <form action="{{ url('/loginProcess')}}" method="post" autocomplete="off">
        {{ csrf_field()}}
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
            <h2 class="text-center mb-4">Login</h2>
                <div class="form-group">
                <hr>
                    @if(Session::has('alert'))
                    <div class="alert alert-danger">
                        <div> {{Session::get('alert')}}</div>
                    </div>
                    @endif
                    @if(Session::has('alert-success'))
                        <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                        </div>
                    @endif
                  <label class="label" for="username">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" id="username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label" for="password">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password" id="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit">Login</button>
                </div>
                <div class="form-group d-flex justify-content-between">
                  <div class="form-check form-check-flat mt-0">
                  </div>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Not a member ?</span>
                  <a href="/register" class="text-black text-small">Create new account</a>
                </div>
              </form>
            </div>
            <ul class="auth-footer">
              <li>
                <a href="#">Conditions</a>
              </li>
              <li>
                <a href="#">Help</a>
              </li>
              <li>
                <a href="#">Terms</a>
              </li>
            </ul>
            <p class="footer-text text-center">copyright © 2018 Franchiese. All rights reserved.</p>
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