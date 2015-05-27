@extends('supportingHand.master')


@section('content')


@include('supportingHand.partials.header')


	<div class="blog">
		<div class="container">
			<div class="blog-main">
				<div class="blog-top">
				<h3> </h3>
				</div>
				<div class="col-md-8 blog-left row">
				 <div class="blog-section col-md-6">
			 	  <a href="{{ route('help') }}"> <img src="{{ asset('img/supportingHand/images/boy.jpg') }}" alt=""/> </a>
				 	  
				 <div class="grid">
				 	 
				 	 <div class="grid-left">
				   	 <a href="{{ route('help') }}"><h3>Standart Blog Post With Featured Image</h3></a>
				   	   
				   	   <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
				   	   <a class="bwn" href="{{ route('help') }}">READ MORE</a>
				   	   <a class="bwn" href="{{ route('help') }}">DONATE NOW</a>
				   </div>
				   <div class="grid-right text-center">
					   	<span class="comm">12</span>
					   	<span>days</span>
					   	<span>left</span>
				   </div>
				   <div class="clearfix"> </div>
				  </div>
				 </div>

				 	 <div class="blog-section col-md-6">
				  	  <a href="{{ route('help') }}"> <img src="{{ asset('img/supportingHand/images/boy.jpg') }}" alt=""/> </a>
				 	 	  
				 	 <div class="grid">
				 	 	 
				 	 	 <div class="grid-left">
				 	   	 <a href="{{ route('help') }}"><h3>Standart Blog Post With Featured Image</h3></a>
				 	   	   
				 	   	   <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
				 	   	   <a class="bwn" href="{{ route('help') }}">READ MORE</a>
				 	   	   <a class="bwn" href="{{ route('help') }}">DONATE NOW</a>
				 	   </div>
				 	   <div class="grid-right text-center">
				 		   	<span class="comm">12</span>
				 		   	<span>days</span>
				 		   	<span>left</span>
				 	   </div>
				 	   <div class="clearfix"> </div>
				 	  </div>
				 	 </div>

				 	 	 <div class="blog-section col-md-6">
				 	  	  <a href="{{ route('help') }}"> <img src="{{ asset('img/supportingHand/images/boy.jpg') }}" alt=""/> </a>
				 	 	 	  
				 	 	 <div class="grid">
				 	 	 	 
				 	 	 	 <div class="grid-left">
				 	 	   	 <a href="{{ route('help') }}"><h3>Standart Blog Post With Featured Image</h3></a>
				 	 	   	   
				 	 	   	   <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
				 	 	   	   <a class="bwn" href="{{ route('help') }}">READ MORE</a>
				 	 	   	   <a class="bwn" href="{{ route('help') }}">DONATE NOW</a>
				 	 	   </div>
				 	 	   <div class="grid-right text-center">
				 	 		   	<span class="comm">12</span>
				 	 		   	<span>days</span>
				 	 		   	<span>left</span>
				 	 	   </div>
				 	 	   <div class="clearfix"> </div>
				 	 	  </div>
				 	 	 </div>
				 	 	 	 <div class="blog-section col-md-6">
				 	 	  	  <a href="{{ route('help') }}"> <img src="{{ asset('img/supportingHand/images/boy.jpg') }}" alt=""/> </a>
				 	 	 	 	  
				 	 	 	 <div class="grid">
				 	 	 	 	 
				 	 	 	 	 <div class="grid-left">
				 	 	 	   	 <a href="{{ route('help') }}"><h3>Standart Blog Post With Featured Image</h3></a>
				 	 	 	   	   
				 	 	 	   	   <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
				 	 	 	   	   <a class="bwn" href="{{ route('help') }}">READ MORE</a>
				 	 	 	   	   <a class="bwn" href="{{ route('help') }}">DONATE NOW</a>
				 	 	 	   </div>
				 	 	 	   <div class="grid-right text-center">
				 	 	 		   	<span class="comm">12</span>
				 	 	 		   	<span>days</span>
				 	 	 		   	<span>left</span>
				 	 	 	   </div>
				 	 	 	   <div class="clearfix"> </div>
				 	 	 	  </div>
				 	 	 	 </div>
				
				 <div class="pag-nations">
						<ul class="p_n-list">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">More</a></li>
							<li><a href="#">19</a></li>
							<li><a href="#">20</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 blog-right"> 
					<div class="sear">
						<input type="text" value="SEARCH.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'SEARCH..';}"/>
						<input type="submit" value="">
					</div>
					<h3> CATEGORIES</h3>
					<ul class="blog-rig-list">
						<li><a href="#">CATEGORY 1</a></li>
						<li><a href="#">CATEGORY 2</a></li>
						<li><a href="#">CATEGORY 3</a></li>
						<li><a href="#">CATEGORY 4</a></li>
						<li><a href="#">CATEGORY 5</a></li>
					</ul>
					
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


@endsection