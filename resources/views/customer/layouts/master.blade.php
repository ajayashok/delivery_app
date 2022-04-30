<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Delivery App</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Fonts and icons -->
	<script src="{{asset('plugins/assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: [ "{{asset('plugins/assets/css/fonts.min.css')}}" ]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('plugins/assets/css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> --}}
	<link rel="stylesheet" href="{{asset('plugins/assets/css/atlantis.min.css')}}">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{asset('plugins/assets/css/demo.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

	<style>
        .logo-strong{
            color: white !important;
            font-weight: bold !important;
        }
        .table td, .table th {
            padding: 0px 18px !important;
        }
	</style>

	@stack('css')
    @include('customer.layouts.meta')
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">

				<a href="" class="logo">
{{--					<img src="{{asset('plugins/assets/img/logo.svg')}}" alt="navbar brand" class="navbar-brand">--}}
                    <stong class="logo-strong">Delivery App</stong>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle mt-3">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->
			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

				<div class="container-fluid">
					 <div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ." name="search" class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
                            @php
                                $address = \App\Models\Address::where('user_id',auth()->user()->id)->get();
                            @endphp
                            <select class="form-control address">
                                <option> Set default address </option>
                                @foreach($address as $adr)
                                    <option value="{{ $adr->id }}" @if($adr->is_default == 1) selected @endif>{{ $adr->address_line1.'-'.$adr->address_line2.'-'.$adr->district .'-'.$adr->pincode  }}</option>
                                @endforeach
                            </select>
						</li>
						<li class="nav-item dropdown hidden-caret">
                            <i class="fa text-danger" style="font-size:24px">&#xf07a;</i>
						</li>

						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									@if(!empty(auth()->user()->image))
										<img src="{{ asset('profile.png') }}" alt="." class="avatar-img rounded-circle">
									@else
										<img src="{{asset('profile.png')}}" alt="." class="avatar-img rounded-circle">
									@endif
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg">
												@if(!empty(auth()->user()->image))
													<img src="{{ asset('profile.png') }}" alt="profile image" class="avatar-img rounded">
												@else
													<img src="{{asset('profile.png')}}" alt="profile image" class="avatar-img rounded">
												@endif
											</div>
											<div class="u-text">
												<h4>{{auth()->user()->name}}</h4>
												<p class="text-muted">{{auth()->user()->email}}</p>

											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="">My Address</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="user_type" value="1">
                                        </form>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
        @if (auth()->user()->role_id == \App\Http\Constants\WebConstants::TYPE_CUSTOMER)
            @include('customer.layouts.sidebar')
        @else
            @include('delivery.layouts.sidebar')
        @endif

        @yield('content')
		<!-- End Custom template -->
	</div>

	<!--   Core JS Files   -->
	<script src="{{asset('plugins/assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('plugins/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('plugins/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{asset('plugins/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<!-- jQuery Sparkline -->
	<script src="{{asset('plugins/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.j')}}s"></script>
	<!-- Bootstrap Notify -->
	<script src="{{asset('plugins/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<!-- Sweet Alert -->
	<script src="{{asset('plugins/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<!-- Atlantis JS -->
	<script src="{{asset('plugins/assets/js/atlantis.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
		function removeErrorMessage(object){
			var id = object.id;
			var x = document.getElementById(id);
			x.innerHTML = "";
		}
		$(document).on('change','.address',function(){
		    if($(this).val() != '') {
                $.ajax({
                    url: "{{ route('customer.change-address') }}" + "/" + $(this).val(),
                    type: 'get',
                    success: function (result) {
                        toastr.success("Address Changed Succsfull")
                        $(this).val(result.id);
                    }
                });
            }
        })
	</script>
    @stack('scripts')

</body>
</html>
