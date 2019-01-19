@extends('homepublic.layouts.app')

@section('content')			
			

			<!-- page-top start-->
			<!-- ================ -->
			<div class="page-top object-non-visible" data-animation-effect="fadeInUpSmall" data-effect-delay="100">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-center title">Cascade Middle School</h1>
							
						
							<div class="separator"></div>
							<p class="text-center">Simple, Smart, and Affordable.</p>
							<div class="text-center">
								<a href="{{url('login')}}" class="btn radius btn-primary btn-lg">Students-Login(Demo) <i class="fa fa-user"></i></a>
								<a href="{{url('admin_login')}}" class="btn radius btn-danger btn-lg">Teachers-Login(Demo) <i class="fa fa-user-plus"></i></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- page-top end -->


@endsection