@extends('edBase.ed_front_master')


@section('style')


@endsection


@section('content')

	<div id="wrap">
			<header id="header">
					<nav id="nav-top">
							<div class="container">
								<ul class="contact-top">
										<li><a href="#"><i class="fa fa-phone"></i> +66 123456789</a></li>
										<li><a href="#"><i class="fa fa-envelope"></i> info@example.com </a></li>
								</ul>
								{{-- <ul class="social-top pull-right">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-flickr"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul> --}}
							</div>
					</nav>
					<nav id="nav-middle">
							<nav class="navbar" role="navigation">
									<div class="container">
											<div class="navbar-header">
													<ul class="navbar-xs pull-right  visible-xs">
															<li><button class="btn btn-header-search" ><i class="fa fa-search"></i></button></li>
															<li><a href="#" data-toggle="collapse" data-target="#navbar-collapse"><i class="fa fa-bars"></i></a></li>
													</ul>
													<a class="navbar-brand" href="#">
														<h3>edBase</h3>
													</a> 
											</div>
											<div class="collapse navbar-collapse" id="navbar-collapse">
											<ul class="nav navbar-nav navbar-right hidden-xs" id="navigation">
													<li class="active"><a href="index.html">Home</a></li>
													<li><a href="{{ route('login') }}">Log In</a></li>
											</div>
									</div>
									<!-- /.container -->
							</nav>
					</nav>
			</header>
			<!--
			/////////////////////////////////////////////////////////////////////////
			//////////     TOP SEARCH CONTENT     ///////
			//////////////////////////////////////////////////////////////////////
			-->
			
			<!-- //widget-top-search-->
			<section id="header-space"></section>
			
			
			
			<section class="section">
					<div class="container">
							<div class="row">
									<div class="text-center">
											{{-- <h2> <strong>HTML5</strong> &amp; CSS3 </h2>
											<h3 class="sub-title animated" data-effect="fadeInRight">Premium admin and front end template</h3> --}}
									</div>
							</div>
							<div class="row">
									<div class="col-md-4 col-sm-12">
											<article class="boxIcon animated" data-effect="fadeInLeft"> 
												<a href="#">
													<span> 
														<img class="img-circle img-responsive" src="{{ asset('img/edBase/assets/img/team/team-corporate-1.jpg') }}" alt=""> 
													</span>
													<h2>HTML5 &amp; CSS3</h2>
													<p>Built with modern technologies like HTML5 and CSS3, SEO optimised</p>
												</a> 
											</article>
									</div>
									<div class="col-md-4 col-sm-12">
											<article class="boxIcon animated" data-effect="fadeInUp">
												<a href="#">
													<span>
														<img class="img-circle img-responsive" src="{{ asset('img/edBase/assets/img/team/team-corporate-2.jpg') }}" alt="">
														<!--<i class="fa fa-laptop"></i>-->
													</span>
													<h2>Clean design</h2>
													<p>Elegant layouts that help you organize your content in the best way</p>
												</a> 
											</article>
									</div>
									<div class="col-md-4 col-sm-12">
											<article class="boxIcon animated" data-effect="fadeInRight">
												<a href="#">
													<span>
														<img class="img-circle img-responsive" src="{{ asset('img/edBase/assets/img/team/team-corporate-3.jpg') }}" alt="">
													</span>
													<h2>Responsive design</h2>
													<p>Compatible with various desktop, tablet, and mobile devices.</p>
												</a>
											</article>
									</div>
							</div>
					</div>
			</section>
			
			
			<section class="section bg-darkorange">
					<div class="container">
							<div class="row">
									<div class="col-md-6 animated" data-effect="fadeInDown">
											<h1 class="highlight-title"><strong>Easy</strong> to use</h1>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
													tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
													veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
													ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
													velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
													cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
													id est laborum. 
											</p>
									</div>
									<div class="col-md-6 text-center">
											<div class="img-stack" style="margin-top:0px; margin-bottom:-28px">
													<img src="{{ asset('img/edBase/assets/img/theme-pics/fl1.png') }}" alt="" class="img-responsive img-bottom  animated" data-effect="slideInRight">
													<img src="{{ asset('img/edBase/assets/img/theme-pics/fl2.png') }}" alt="" class="img-responsive img-bottom  bottom-over animated" data-effect="slideInRight" data-start="300">
													<img src="{{ asset('img/edBase/assets/img/theme-pics/fl3.png') }}" alt="" class="img-responsive img-bottom  bottom-over animated" data-effect="fadeInUp" data-start="1200">
											</div>
									</div>
							</div>
					</div>
			</section>
	</div>
img/edBase/

@endsection


@section('script')


@endsection