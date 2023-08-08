<html lang="en">
<head>
    @include('header.head')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    {{-- <a href="{{route('contact')}}"><img src="{{ asset('img/logo/login-logo.jpg') }}" alt="" style="border-radius: 50%; width:100px; height:100px"></a> --}}
    <a href="#"><img src="{{ asset('img/logo/login-logo.jpg') }}" alt="" style="border-radius: 50%; width:100px; height:100px"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Hãy đăng nhập để vào CRM</p>

      <form action="login/store" method="post">
        @include('layout.alert')
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" id="remember">
              <label for="remember">
                Giữ đăng nhập
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
        @csrf
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Quên mật khẩu</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@include('footer.footer')
</body>
</html>
