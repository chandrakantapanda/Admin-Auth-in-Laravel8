<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Welcome | Admin Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('css/admin/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin/blue.min.css') }}">

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Admin</b>Login</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            @if(\Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div class="alert-body">
                    {{ \Session::get('success') }}
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            {{ \Session::forget('success') }}
            @if(\Session::get('error'))
            <div class="alert alert-danger" role="alert">
                <!-- <div class="alert-body"> -->
                    {{ \Session::get('error') }}
                <!-- </div> -->
                <a href="#" class="btn-close" data-dismiss="alert" aria-label="close">&times;</a>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
            </div>
            @endif
            <form class="auth-login-form mt-2" action="{{route('adminLoginPost')}}" method="post">
            @csrf
            <div class="form-group has-feedback">
                <input type="text" class="form-control" id="email" name="email" value="{{old('email') }}" autofocus />
                @if ($errors->has('email'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
                
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control form-control-merge" id="password" name="password" tabindex="2" />
                @if ($errors->has('password'))
                <span class="help-block font-red-mint">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif   
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="login"><span
                            class="fa fa-sign-in"></span>Sign In</button>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">

                </div>
                <!-- /.col -->
            </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script type="text/javascript" src="{{URL::asset('js/admin/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/admin/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('js/admin/icheck.min.js')}}"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
    </script>
</body>

</html>