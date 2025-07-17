<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="Cache-control" content="no-cache">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- ✅ Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.png') }}" />

	<!-- ✅ Bootstrap CSS -->
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">

	<!-- ✅ Fonts & Icons -->
	<link rel="stylesheet" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" href="{{ asset('fonts/linearicons-v1.0.0/icon-font.min.css') }}">

	<!-- ✅ Vendor CSS -->
	<link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/MagnificPopup/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}">

	<!-- ✅ Custom CSS -->
	<link rel="stylesheet" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('css/personal.css') }}">

	<!-- ✅ Bootstrap Icons CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

	<!-- ✅ SweetAlert2 CDN -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>


<body class="animsition">

	<!-- product add to cart wala succes msg  -->
	<!-- humne sweet alert ka popup msg kiya he succes k leye  -->
	@if (session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                timer: 3000, // 3 seconds
                showConfirmButton: true, 
                // timerProgressBar: true 
            });
        });
    </script>
@endif


	<!-- humne sweet alert ka popup msg kiya he succes k leye  -->

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="left-top-bar ">
						Standar Delevery For Every order 200
					</div>

					<div class="right-top-bar flex-w h-full" style="margin-right: 120px;!important">
						@auth
							<!-- ✅ Logged-in User Dropdown -->
							<div class="dropdown flex-c-m trans-04 p-lr-25 ">
								<button class="btn dropdown-toggle text-white d-flex align-items-center" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<img src="{{ asset('images/avator.png') }}" alt="Avatar" class="rounded-circle "
										width="25" height="25">
									{{ Auth::user()->name }}
								</button>

								<ul class="dropdown-menu" style=" z-index: 9999 !important;">
									<li>
										<a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
									</li>
									<li>
										<form method="POST" action="{{ route('logout') }}">
											@csrf
											<button class="dropdown-item" type="submit">Logout</button>
										</form>
									</li>
								</ul>
							</div>
						@else
							<!-- 🔓 Guest User Buttons -->
							<a href="{{ route('login') }}" class="flex-c-m trans-04 p-lr-25 me-2">Login</a>
							<a href="{{ route('register') }}" class="flex-c-m trans-04 p-lr-25">Register</a>
						@endauth
					</div>

				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index" class="logo">
						<img src="{{ asset("images/icons/stylemartlogo2.png") }}" id="stylemart-logo" alt="IMG-LOGO">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index">Home</a>

							</li>

							<li>
								<a href="product">Shop</a>
							</li>

							<!-- <li class="label1" data-label1="hot">
								<a href="shoping-cart.php">Features</a>
							</li> -->

							<!-- <li>
								<a href="blog.php">Blog</a>
							</li> -->

							<li>
								<a href="about">About</a>
							</li>

							<li>
								<a href="contact">Contact</a>
							</li>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						<!-- icon-header-noti js-show-cart -->
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
							<a href="{{ route('cart') }}" class="position-relative d-inline-block">
								<i id="header-cart-icon" class="bi bi-cart3  text-dark"></i>

								@php
									$cart = session('cart');
									$count = $cart ? count($cart) : 0;
								@endphp

								@if ($count > 0)
									<span id="cart-count-badge" class="badge bg-danger text-white position-absolute"
										style="top: -12px; right: -8px; font-size: 0.6rem; padding: 4px 6px; border-radius: 50%;">
										{{ $count }}
									</span>
								@endif
							</a>
						</div>

					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/stylemartlogo2.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<!-- <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div> -->

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
					<a href="{{ route('cart') }}" class="position-relative d-inline-block">
						<i id="header-cart-icon" class="bi bi-cart3  text-dark"></i>

						@php
							$cart = session('cart');
							$count = $cart ? count($cart) : 0;
						@endphp

						@if ($count > 0)
							<span id="cart-count-badge" class="badge bg-danger text-white position-absolute"
								style="top: -12px; right: -8px; font-size: 0.6rem; padding: 4px 6px; border-radius: 50%;">
								{{ $count }}
							</span>
						@endif
					</a>
				</div>
				<!-- <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a> -->
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<!-- <a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a> -->

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							login
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Register
						</a>
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>

					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<!-- <li>
					<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
				</li> -->

				<!-- <li>
					<a href="blog.php">Blog</a>
				</li> -->

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<!-- <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div> -->
	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-01.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								White Shirt Pleat
							</a>

							<span class="header-cart-item-info">
								1 x $19.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-02.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Converse All Star
							</a>

							<span class="header-cart-item-info">
								1 x $39.00
							</span>
						</div>
					</li>

					<li class="header-cart-item flex-w flex-t m-b-12">
						<div class="header-cart-item-img">
							<img src="images/item-cart-03.jpg" alt="IMG">
						</div>

						<div class="header-cart-item-txt p-t-8">
							<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
								Nixon Porter Leather
							</a>

							<span class="header-cart-item-info">
								1 x $17.00
							</span>
						</div>
					</li>
				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php"
							class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.php"
							class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>