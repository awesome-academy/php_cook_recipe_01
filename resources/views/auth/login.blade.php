@extends('layouts.app')

@section('header')
    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('public') }}/images/login/icons/favicon.ico"/>
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/animate.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/hamburgers.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/select2.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/util.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('public') }}/css/login/main.css">
    <!--===============================================================================================-->
@endsection

@section('content')

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('public') }}/images/login/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
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
    
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ trans('login.login') }}</div>

                <div class="card-body">
                    {!! Form::open(['method' => 'POST', 'route' => 'login']) !!}
                        <div class="form-group row">
                            {!! Form::label('email', trans('login.email'), ['class' => 'col-sm-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::email('email', '', ['class' => 'form-control', 'id' => 'email', 'value' => "{{ old('email') }}", 'required' => 'required', 'autofocus' => 'autofocus']) !!}

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('password', trans('login.password'), ['class' => 'col-md-4 col-form-label text-md-right']) !!}

                            <div class="col-md-6">
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password', 'required' => 'required']) !!}

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    {!! Form::checkbox('remember', '', ['class' => 'form-check-input', 'id' => 'remember']) !!}

                                    {!! Form::label('remember', trans('login.rememberme'), ['class' => 'form-check-label']) !!}

                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                {!! Form::button(trans('login.login'), ['class' => 'btn btn-primary', 'type' => 'submit']) !!}

                                <a class="btn btn-link" href="{{ asset('public') }}/{{ route('password.request') }}">
                                    {{ trans('login.forgot') }}
                                </a>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection

@section('footer')
    <!--===============================================================================================-->	
	<script src="{{ asset('public') }}/js/login/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('public') }}/js/login/popper.js"></script>
        <script src="{{ asset('public') }}/js/login/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('public') }}/js/login/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('public') }}/js/login/tilt.jquery.min.js"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('public') }}/js/login/main.js"></script>
@endsection