<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ url('assets/images/favicon2.png') }}" type="image/x-icon">

  <!-- loader-->
  <link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet" />
  <script src="{{ url('assets/js/pace.min.js') }}"></script>

  <!--plugins-->
  <link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('assets/toastr/toastr.min.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <!--Theme Styles-->
  <link href="{{ url('assets/css/dark-theme.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/semi-dark.css') }}" rel="stylesheet" />
  <link href="{{ url('assets/css/header-colors.css') }}" rel="stylesheet" />

  <title>PT KAMILAH WISATA MUSLIM</title>
</head>

<body>
  <!--start wrapper-->
  <div class="wrapper">
    <div class="">
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-12">
          <div class="login-cover-wrapper">
            <div class="card shadow-none">
              <div class="card-body">
                <div class="text-center">
                  <h4>Sign In</h4>
                  <p>silahkan login ke akun anda!</p>
                </div>
                <form action="{{ url('/token') }}" method="POST" class="form-body row g-3">
                  @csrf
                  <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="col-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
                  <div class="col-12 col-lg-6">
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckRemember">
                      <label class="form-check-label" for="flexSwitchCheckRemember">Remember Me</label>
                    </div>
                  </div>
                  <div class="col-12 col-lg-6 text-end">
                    <a href="authentication-reset-password-cover.html">Forgot Password?</a>
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Sign In</button>
                    </div>
                  </div>
                  <div class="col-12 col-lg-12 text-center">
                    <p class="mb-0">Don't have an account? <a href="{{ url('/signup') }}">Sign up</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-fixed top-0 h-100 d-xl-block d-none login-cover-img">
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
  <!--end wrapper-->
  <!-- JS Files-->
  <script src="{{ url('assets/js/jquery.min.js') }}"></script>
  <script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
  <script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
  <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <!--plugins-->
  <script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ url('assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
  <script src="{{ url('assets/plugins/chartjs/chart.min.js') }}"></script>
  <script src="{{ url('assets/js/index.js') }}"></script>
  <script src="{{ url('assets/toastr/toastr.min.js') }}"></script>
  <!-- Main JS-->
  <script src="{{ url('assets/js/main.js') }}"></script>
  @toastr_render
</body>

</html>