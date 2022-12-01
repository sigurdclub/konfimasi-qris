  <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--===============================================================================================-->	
    <link rel="icon" type="temp_login/image/png" href="temp_login/images/icons/favicon.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="temp_login/vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="temp_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="temp_login/vendor/animate/animate.css">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="temp_login/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="temp_login/vendor/select2/select2.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="temp_login/css/util.css">
    <link rel="stylesheet" type="text/css" href="temp_login/css/main.css">
  <!--===============================================================================================-->
  </head>
  <body>
    
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <div class="login100-pic js-tilt" data-tilt>
            <img src="assets/img/KabupatenMaros.png" alt="IMG">
          </div>

          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
            </div>
          @endif

          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
          </div>
        @endif





          <form class="login100-form validate-form" action="{{ url('login') }}" method="post">
            @csrf

            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <span class="login100-form-title">
              Member Login
            </span>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <input 
              type        = "text" 
              name        = "email" 
              value       = "{{ old('email') }}"
              class       = "input100 @error('email') is-invalid @enderror" 
              required 
              autofocus 
              placeholder = "Email"
              >
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Password is required">
              <input 
              name          = "password"
              type          = "password" 
              class         = "input100" 
              placeholder   = "Password"
              required type = "password" 
              >
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa fa-lock" aria-hidden="true"></i>
              </span>
            </div>
            
            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Login
              </button>
            </div>

            <div class="text-center p-t-12">
              <span class="txt1">
                Forgot
              </span>
              <a class="txt2" href="#">
                Username / Password?
              </a>
            </div>

            <div class="text-center p-t-136">
              <a class="txt2" href="#">
                Create your Account
                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
    
    

    
  <!--===============================================================================================-->	
    <script src="temp_login/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
    <script src="temp_login/vendor/bootstrap/js/popper.js"></script>
    <script src="temp_login/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
    <script src="temp_login/vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
    <script src="temp_login/vendor/tilt/tilt.jquery.min.js"></script>
    <script >
      $('.js-tilt').tilt({
        scale: 1.1
      })
    </script>
  <!--===============================================================================================-->
    <script src="temp_login/js/main.js"></script>

  </body>
  </html>










