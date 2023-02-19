<body id="top">
<header>

	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 mr-5">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<!-- <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i></a></li> -->
						<li class="list-inline-item">
							<i class="icofont-location-pin mr-2"></i>Vasavi Colony, Kothapet, Hyderabad. </li>
					</ul>
				</div>

				<div class="col-lg-6 mr-2">
					<form action="{{route('searchsubtest')}}" method="post">
						@csrf
					<div class="row">
						<div class="col-lg-10">
					      <select class="js-subtest form-control col-lg-12" name="subtest"></select>
						</div>
					
					<div class="col-lg-1">
							<button class="btn btn-danger"><i class="icofont-search-1"></i></button>
					</div>
				    
				   </form>

					</div>
				 	{{-- <a href="#" class="btn btn-sm btn-blue btn-search">Search</a> --}}
					
				</div>

				<div class="col-lg-2">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<div class="dropdown">
							<button type="button" class="btn btn-success" data-toggle="dropdown">
								<i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
							</button>

							<div class="dropdown-menu">
								<div class="row total-header-section">
									@php $total = 0 @endphp
									@foreach((array) session('cart') as $id => $details)
									@php
									$total += $details['price'] * $details['quantity'] @endphp
									@endforeach
									<div class="col-lg-12 col-sm-12 col-12 total-section text-right">
										<p>Total: <span class="text-info">₹ {{ $total }}</span></p>
									</div>
								</div>
								@if(session('cart'))
								@foreach(session('cart') as $id => $details)
								<div class="row cart-detail">
									<div class="col-lg-8 col-sm-4 col-4 cart-detail-img">
										<p>{{ $details['name'] }}</p>
									</div>
									<div class="col-lg-4 col-sm-8 col-8 cart-detail-product">
										<p>{{ $details['lab_name'] }}</p>
										<span class="price text-info"> ₹ {{ $details['price'] }}</span> <span class="count"> Qty:{{ $details['quantity'] }}</span>
									</div>
								</div>
								@endforeach
								@endif

								<div class="row">
									<div class="col-lg-12 col-sm-12 col-12 text-center checkout">
										<a href="#" class="btn btn-success btn-block">View all</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	<a class="navbar-brand" href="{{route('home')}}">
			  	<img src="{{asset('images/Logo.jpeg')}}" alt="" class="img-fluid"  style="height:110px; width:270px">
			</a>

		<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
		
				<span class="icofont-navigation-menu"></span>
		  
		</button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{route('home')}}">Home</a>
			  </li>
			   
			   <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
			   <li class="nav-item"><a class="nav-link" href="service.html">Packages</a></li>

			     
			   <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
			</ul>
		  </div>
		</div>
	</nav>

</header>
