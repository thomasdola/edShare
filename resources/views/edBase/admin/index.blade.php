@extends('edBase.ed_end_master')


@section('style')


@endsection


@section('content')

	
	<body class="leftMenu nav-collapse">
	<div id="wrapper">
			<!--
			/////////////////////////////////////////////////////////////////////////
			//////////     HEADER  CONTENT     ///////////////
			//////////////////////////////////////////////////////////////////////
			-->
			@include('edBase.partials.admin_header')
			<!-- //header-->
			
			
			<!--
			/////////////////////////////////////////////////////////////////////////
			//////////     SLIDE LEFT CONTENT     //////////
			//////////////////////////////////////////////////////////////////////
			-->
			
			
			<!--
			/////////////////////////////////////////////////////////////////////////
			//////////     TOP SEARCH CONTENT     ///////
			//////////////////////////////////////////////////////////////////////
			-->
			@include('edBase.partials.top_search')
			<!-- //widget-top-search-->
			
			
			<!--
			/////////////////////////////////////////////////////////////////////////
			//////////     MAIN SHOW CONTENT     //////////
			//////////////////////////////////////////////////////////////////////
			-->

			<!-- //main-->
			
			-->
			<div id="main">

					<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Library</a></li>
							<li class="active">Data</li>
					</ol>
					<!-- //breadcrumb-->

					<div id="content">
					
							<div class="row">
									<div class="col-md-4">
											<div class="well bg-info">
													<div class="widget-tile">
														<section>
																<h5><strong>ACTIVE</strong> USERS </h5>
																<h2>8,590</h2>
																<div class="progress progress-xs progress-white progress-over-tile">
																		<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="8590" aria-valuemax="10000"></div>
																</div>
																<label class="progress-label label-white"> Just 1410 member to limit , <a href="#">Upgrade Now</a> </label>
														</section>
														<div class="hold-icon"><i class="fa fa-bar-chart-o"></i></div>
													</div>
											</div>
									</div>
									<div class="col-md-4">
											<div class="well bg-inverse">
													<div class="widget-tile">
														<section>
																<h5>NUMBER OF SCHOOLS</h5>
																<h2>478</h2>
																<div class="progress progress-xs progress-white progress-over-tile">
																		<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="478" aria-valuemax="1000"></div>
																</div>
																<label class="progress-label label-white">Up 5% from last month</label>
														</section>
														<div class="hold-icon"><i class="fa fa-shopping-cart"></i></div>
													</div>
											</div>
									</div>
									<div class="col-md-4">
											<div class="well bg-theme">
													<div class="widget-tile">
														<section>
															<h5><strong>MAIL</strong></h5>
															<h2>97,584</h2>
															<div class="progress progress-xs progress-white progress-over-tile">
																	<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="97584" aria-valuemax="300000"></div>
															</div>
															<label class="progress-label label-white">32.53% of  viewer target</label>
														</section>
														<div class="hold-icon"><i class="fa fa-laptop"></i></div>
													</div>
											</div>
									</div>
							</div>

							<div class="row">
								<div class="col-xs-4">
									<section class="panel">
										<div class="widget-clock">
											<div id="clock"></div>
										</div>
									</section>
								</div>
							</div>
							<!-- //content > row-->
							
					</div>
					<!-- //content-->
					
					<footer id="site-footer">
						<section>&copy; Copyright 2014, By zicedemo</section>
					</footer>
					
			</div>
			<!-- //main-->
			
			<!--
			///////////////////////////////////////////////////////////////////
			//////////     MODAL MESSAGES     //////////
			///////////////////////////////////////////////////////////////
			-->
			@include('edBase.partials.modal_msg')
			<!-- //modal-->
			
			
			
			<!--
			//////////////////////////////////////////////////////////////////////////
			//////////     MODAL NOTIFICATION     //////////
			//////////////////////////////////////////////////////////////////////
			-->
			@include('edBase.partials.modal_notifications')
			<!-- //modal-->
			
			
			
			<!--
			//////////////////////////////////////////////////////////////
			//////////     LEFT NAV MENU     //////////
			///////////////////////////////////////////////////////////
			-->
			@include('edBase.partials.admin_left_menu')
			<!-- //nav left menu-->
			
			
					<!--
			/////////////////////////////////////////////////////////////////
			//////////     RIGHT NAV MENU     //////////
			/////////////////////////////////////////////////////////////
			-->
			
			
			
	</div>
	<!-- //wrapper-->


@endsection


@section('script')



@endsection