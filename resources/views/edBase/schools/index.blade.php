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
			@include('edBase.partials.school_header')
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
			<div id="main">

					<ol class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li class="active">Dashboard</li>
					</ol>
					<!-- //breadcrumb-->

					<div id="content">

							<div class="row">
									<div class="col-md-8">
										<section class="panel">
											
											
											<div class="panel-body">
												<div class="row">
													<div class="col-md-7">
															<h3><strong>Customer </strong> Returning</h3>
															<br>
															<div class="progress progress-sm">
																	<div class="progress-bar bg-purple" aria-valuetransitiongoal="45"></div>
															</div>
															<label class="progress-label">United States 45%</label>
															<!-- //progress-->
															<div class="progress progress-sm">
																	<div class="progress-bar bg-danger" aria-valuetransitiongoal="62"></div>
															</div>
															<label class="progress-label">France 62%</label>
															<!-- //progress-->
															<div class="progress progress-shine progress-sm">
																	<div class="progress-bar bg-inverse" aria-valuetransitiongoal="57"></div>
															</div>
															<label class="progress-label">Australia 57%</label>
															<!-- //progress-->
															<div class="progress progress-sm">
																	<div class="progress-bar bg-theme-inverse" aria-valuetransitiongoal="33"></div>
															</div>
															<label class="progress-label">Brazil 33%</label>
															<!-- //progress-->
															<div class="progress progress-sm">
																	<div class="progress-bar bg-info" aria-valuetransitiongoal="24"></div>
															</div>
															<label class="progress-label">Thailand 24%</label>
															<!-- //progress-->
													</div>
													<div class="col-md-5">
															<h3><strong>Country</strong> Visits</h3>
															<br>
															<ol class="rectangle-list">
																	<li><a href="#">Canada <span class="pull-right">17,485</span></a></li>
																	<li><a href="#">Brazil <span class="pull-right">11,452</span></a></li>		
																	<li><a href="#">France <span class="pull-right">9,875</span></a></li>
																	<li><a href="#">Thailand <span class="pull-right">9,214</span></a></li>	
															</ol>
													</div>
												</div>
											</div>
										</section>
										
											
											
											<section class="panel">
												<div class="panel-heading">
													<h3>BEST STUDENTS</h3>
												</div>
													<div class="panel-body">
															<div class="table-responsive">
																	<table class="table table-striped table-hover" data-provide="data-table">
																			<thead>
																					<tr>
																							<th> Photo </th>
																							<th> Fullname </th>
																							<th> Username </th>
																							<th> Status </th>
																							<th>  View</th>
																					</tr>
																			</thead>
																			<tbody align="center">
																					<tr >
																							<td><img src="{{ asset('img/edBase/assets/img/avatar.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Mark Nilson </td>
																							<td> makr124 </td>
																							<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar2.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Filip Rolton </td>
																							<td> jac123 </td>
																							<td><span class="label label-sm bg-darkorange"> Pending </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar3.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Colin Fox </td>
																							<td> col </td>
																							<td><span class="label label-sm bg-theme"> Blocked </span</td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Nick Stone </td>
																							<td> sanlim </td>
																							<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar5.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Edward Cook </td>
																							<td> sanlim </td>
																							<td><span class="label label-sm bg-theme"> Blocked </span</td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Nick Stone </td>
																							<td> sanlim </td>
																							<td><span class="label label-sm bg-theme"> Blocked </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar6.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Elis Lim </td>
																							<td> makr124 </td>
																							<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar2.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> King Paul </td>
																							<td> king123 </td>
																							<td><span class="label label-sm bg-info"> Pending </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar3.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Filip Larson </td>
																							<td> fil </td>
																							<td><span class="label label-sm bg-theme-inverse"> Approved </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar4.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> Martin Larson </td>
																							<td> larson12 </td>
																							<td><span class="label label-sm bg-theme"> Blocked </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																					<tr>
																							<td><img src="{{ asset('img/edBase/assets/img/avatar5.png') }}" alt="" class="img-circle avatar-mini"></td>
																							<td> King Paul </td>
																							<td> sanlim </td>
																							<td><span class="label label-sm bg-theme"> Blocked </span></td>
																							<td><a class="btn btn-inverse btn-sm" href="#"><i class="fa fa-pencil"></a></td>
																					</tr>
																			</tbody>
																	</table>
															</div>
													</div>
											</section>
									</div>
									<div class="col-md-4">
									
											<div class="well bg-theme-inverse">
													<div class="widget-tile">
														<section>
																<h5><strong>COUNT DOWN</strong></h5>
																<h2>97,584</h2>
																<div class="progress progress-xs progress-white progress-over-tile">
																		<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="97584" aria-valuemax="300000"></div>
																</div>
																<label class="progress-label label-white">32.53% of  viewer target</label>
														</section>
														<div class="hold-icon"><i class="fa fa-laptop"></i></div>
													</div>
											</div>
											
											<div class="well bg-theme">
													<div class="widget-tile">
														<section>
																<h5><strong>TOTAL NUMBER OF STUDENTS</strong></h5>
																<h2>8,590</h2>
																<div class="progress progress-xs progress-white progress-over-tile">
																		<div class="progress-bar  progress-bar-white" aria-valuetransitiongoal="8590" aria-valuemax="10000"></div>
																</div>
																<label class="progress-label label-white"> Just 1410 member to limit , <a href="#">Upgrade Now</a> </label>
														</section>
														<div class="hold-icon"><i class="fa fa-bar-chart-o"></i></div>
													</div>
											</div>
											
											
											<div class="">
												<section class="panel">
														<header class="panel-heading">
																<h2>SCHOOL CALENDAR </h2>
														</header>
														<div class="panel-body">
																	<div class="table-responsive">
																			<table class="table">
																					<thead>
																							<tr>
																									<th>Activities</th>
																									<th>Date</th>
																							</tr>
																					</thead>
																					<tbody align="center">
																							<tr>
																									<td>Table cell</td>
																									<td>Table cell</td>
																							</tr>
																					</tbody>
																			</table>
															</div>
														</div>
												</section>
											</well>

											
									</div>
							</div>
							<!-- //content > row-->
							
					</div>
					<!-- //content-->
									
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
			@include('edBase.partials.school_left_menu')
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

	<script type="text/javascript">
	$(function(){
		$('table[data-provide="data-table"]').dataTable({
			"iDisplayLength": 5
		});
	});
	</script>


@endsection