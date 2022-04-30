<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Delivery App</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{asset('plugins/assets/img/icon.ico')}}" type="image/x-icon"/>
	<!-- Fonts and icons -->
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('plugins/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('plugins/assets/css/atlantis.min.css')}}">

</head>
<body>
	<div class="wrapper">


      <div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">{{config('app.name')}}</h4>

					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-title"> Login</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-8 col-lg-8">
                                            <form method="post" action="{{route('auth.login')}}" id="login">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="user_type">User type</label>
                                                    <select class="form-control" name="user_type" id="user_type">
                                                        <option value="1">Customer</option>
                                                        <option value="2">Delivery Boys</option>
                                                    </select>
                                                    {!! $errors->first('user_type', '<p style="color:red;" class="help-block error">:message</p>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" id="email" name="email" value="" class="form-control" placeholder="Enter email Address">
                                                    {!! $errors->first('email', '<p style="color:red;" class="help-block error">:message</p>') !!}
                                                </div>
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" id="errorInput" name="password" value="" class="form-control" placeholder="********">
                                                    {!! $errors->first('password', '<p style="color:red;" class="help-block error">:message</p>') !!}
                                                  @if (Session::has('error'))
                                                        <small id="emailHelp" class="form-text text-muted">{{Session::get('error')}}</small>
                                                  @endif
                                                </div>
                                                <div class="card-action">
                                                    <button class="btn btn-success">Submit</button>
                                                </div>
                                            </form>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('plugins/assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('plugins/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/jquery.validate.min.js')}}"></script>

	<script>
        $(document).ready(function() {

            $("#login").validate({
                rules: {
                    password: {
                        required: true,
                        minlength: 6
                    },
                    user_type: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address"
                }, errorElement: 'span',
                errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
                },
                submitHandler: function(form) {
                form.submit();
                }
            });
	    });
	</script>
</body>
</html>
