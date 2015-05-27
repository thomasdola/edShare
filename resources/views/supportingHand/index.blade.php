@extends('supportingHand.master')


@section('content')

	



	@include('supportingHand.partials.header')
	<!--heder end here-->
	<!--banner start here-->
	<div class="banner">
		<div class="container">
			<div class="banner-main">
				<h1>WELCOME  TO  SupportingHand</h1>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
			 <div class="bwn">
				<a href="{{ route('help_list') }}"> Donate now </a>
			</div>
			</div>
		</div>
	</div>
	<!--banner end here-->
	<!--below banner start here-->
	<div class="section1">
		   <div class="col-md-4 below-coloum">
		   	<a href="#">Sliding Helps with brief info </a>
		   </div>
		   <div class="col-md-3 below-grace">
		   </div>	
		   <div class="col-md-5 below-side">
				<h2><a href="#">GALLERIES</a></h2>
				<p>Supported Helps</p>
		   </div>	
	  <div class="clearfix"> </div>
	</div>

	<!--below banner end here-->
	<!--news end here-->

	<!--/news end here-->
	<!--footer start here-->

@endsection


