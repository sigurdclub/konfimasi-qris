<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
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

        <form action="{{ url('login') }}" method="post">
            {{-- {{csrf_field()}} --}}
            @csrf
            @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            <div class="col-md-12">
                <input type="text" class="form-control @error('email') is-invalid
                @enderror" id="inputEmail4" name="email" placeholder="email" autofocus required value="{{ old('email') }}">
            </div>
            <div class="form-group d-flex">
                <!-- password -->
              <input class="form-control rounded-left" placeholder="Password" required type="password" name="password">
            </div>

            <div class="col-12" style="display: flex; justify-content: right;margin-top: 4%">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>






