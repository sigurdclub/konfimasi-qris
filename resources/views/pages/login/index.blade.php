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

    <link rel="stylesheet" href="assets/css/style.css">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!--===============================================================================================-->

   <style>
      
      .alert-login{
        position  : fixed;
        z-index   : 2;
        top       : 18%;
        right     : 30%;
        width     : 40%;
      }


   </style>

  <script src="https://kit.fontawesome.com/f10df6ea72.js" crossorigin="anonymous"></script>

  </head>
  <body>
    
   

    <div class="limiter">
      
      <div class="container-login100">
        

        @if (session()->has('loginError'))
        <div class="alert alert-login alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
        </div>
      @endif
        

        <div class="wrap-login100">

         

          <div class="login100-pic js-tilt" data-tilt>
            <img src="assets/img/KabupatenMaros.png" alt="IMG">
          </div>

          @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
            </div>
          @endif

          

        
        
          <form class=" form-public login100-form validate-form" action="{{ url('login') }}" method="post">
            @csrf

            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <span class="login100-form-title">
              Konfirmasi QRIS Login
            </span>

            <div class="wrap-input100 " >
              <input 
                type        = "text" 
                name        = "name" 
                value       = "{{ old('name') }}"
                class       = "input100 @error('name') is-invalid @enderror" 
                required 
                autofocus 
                placeholder = "73080130050xxxxxx"
              >
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa-solid fa-user"></i>
              </span>
            </div>
            
            <div class="container-login100-form-btn">
              <button class="login100-form-btn">
                Login
              </button>
            </div>
          </form>

          <!-- admin -->
          <form style="display: none"   class="form-admin login100-form validate-form" action="{{ url('login/admin') }}" method="post">
            @csrf
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
            <span class="login100-form-title">
              Konfirmasi QRIS Login
            </span>

            <div class="wrap-input100 " >
              <input 
              type        = "text" 
              name        = "name" 
              value       = "{{ old('name') }}"
              class       = "input100 @error('name') is-invalid @enderror" 
              required 
              autofocus 
              placeholder = "Admin"
              >
              <span class="focus-input100"></span>
              <span class="symbol-input100">
                <i class="fa-solid fa-user"></i>
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

          </form>
          

          
          
          <div class="option-login" style="width: 100%; display: flex; justify-content: right" >

            <select style="width: 38%"  class=" select-form form-select  " aria-label=".form-select-sm example">
                
              <option id="warga" value="warga">Warga</option>
              <option  id="admin" value="admin">Admin</option>
              
            </select>
          </div>
          
          
        </div>
      </div>
    </div>
    
    

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  

    
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










