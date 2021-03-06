<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
  <title>Admin Dashboard - Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <!-- VENDOR CSS -->
  <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('assets/vendor/font-awesome/css/font-awesome.min.css') !!}">
  <link rel="stylesheet" href="{!! asset('assets/vendor/linearicons/style.css') !!}">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{!! asset('assets/css/main.css') !!}">
  <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
  <link rel="stylesheet" href="{!! asset('assets/css/demo.css') !!}">
  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <!-- ICONS -->
  <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/img/apple-icon.png') !!}">
  <link rel="icon" type="image/png" sizes="96x96" href="{!! asset('assets/img/favicon.png') !!}">
</head>

<body>
<div id="wrapper">
    <div class="vertical-align-wrap">
      <div class="vertical-align-middle">
        <div class="auth-box ">
          <div class="left">
            <div class="content">
              <div class="header">
                <div class="logo text-center"><img src="" alt="Beckley Logo"></div>
                <p class="lead">Login to your account</p>
              </div>
              <form class="form-auth-small" method="post" action="{{route('new.admin')}}">
                 {{csrf_field()}}
                <div class="form-group">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                    @endforeach

                   @if (session('info'))
                    <div class="alert alert-danger">
                        {{ session('info') }}
                    </div>
                   @endif
                  <label for="signin-email" class="control-label sr-only">Email</label>
                  <input type="email" name="email" class="form-control" id="signin-email" value="" placeholder="Email">
                </div>
                  <div class="form-group">
                  <label for="Name" class="control-label sr-only">Name</label>
                  <input type="text" name="name" class="form-control" value="" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="signin-password" class="control-label sr-only">Password</label>
                  <input type="password" name="password" class="form-control" id="signin-password" value="" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Create</button>
                <div class="bottom">
                  <span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
                </div>
              </form>
            </div>
          </div>
          <div class="right">
            <div class="overlay"></div>
            <div class="content text">
              <h1 class="heading"></h1>
              <p></p>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- END WRAPPER -->
</body>

</html>