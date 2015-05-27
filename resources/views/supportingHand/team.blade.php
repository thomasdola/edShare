@extends('supportingHand.master')


@section('content')

@include('supportingHand.partials.header')


<div class="about">
     <div class="container">
	     <div class="about-main">
	  	     <div class="about-top">
	  	     	 <h3>ABOUT CHARITY</h3>
	  	     </div>
	  	    <div class="about-grid">
			  <div class="col-md-8 about-left">
				   Is online charity platform that makes it easier for anyone to offer a hand to support an educational need. The platform gives students, teachers and schools the opportunity to post their needs online in view to receive support from helpers of education.
				<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 about-right">
					<h3>Categories</h3>
					<div class="about-bottom">
				      <p>Category one</p>
				    </div> 
				    <div class="about-bottom">
				      <p>Category two</p>
				    </div>
				   <div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
				</div>
			<div class="clearfix"> </div>
		</div>
		<div class="aboutus-top">
				<div class="col-md-4  aboutus-left">
					<img src="{{ asset('img/supportingHand/images/gl.jpg') }}" alt=""/>
					<h4>Malorum</h4>
					<h5>CEO OF CHARITY</h5>
					<p>There are many variations of passages of alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				</div>
				<div class="col-md-4  aboutus-left">
					<img src="{{ asset('img/supportingHand/images/man.jpg') }}" alt=""/>
					<h4>Finibus Bonorum</h4>
					<h5>DIRECTOR OF CHARITY </h5>
					<p>There are many variations of passages of alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				</div> 
				<div class="col-md-4  aboutus-left">
					<img src="{{ asset('img/supportingHand/images/gl-1.jpg') }}" alt=""/>
					<h4>Hampden </h4>
					<h5>MANAGER OF CHARITY</h5>
					<p>There are many variations of passages of alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
				</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


@endsection