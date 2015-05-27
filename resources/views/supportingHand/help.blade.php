@extends('supportingHand.master')

@section('content')

@include('supportingHand.partials.header')


	<div class="blog">
		<div class="container">
			<div class="blog-main">
				<div class="blog-top">
				<h3></h3>
				</div>
				<div class="col-md-8 blog-left">
					     <img src="{{ asset('img/supportingHand/images/boy.jpg') }}" alt=""/>
			   <div class="blog-grid">
				   <div class="grid-left">
				   	  <span class="e"> </span>
				      <h3>18</h3>
				      <p>Aug</p>
				   </div>
				   <div class="grid-left">
				   	 <a href="single.html"> <h3>Standart Blog Post With Featured Image</h3></a>
				   	   <ul class="blog-list">
				   	   	  <li><span class="mike"> </span><a href="#">Mike</a></li>
				   	   	  <li><span class="box"> </span><a href="#">Web design</a></li>
				   	   	   <li><span class="comm"> </span><a href="#">0 comment</a></li>
				   	   </ul>
				   	   <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
				   </div>
				 <div class="clearfix"> </div>
				 </div>
				 <div class="blog-para">
									<p>P  ellentesque rhoncus est tincidunt, facilisis augue a, dictum metus. Aenean ut enim ut est lacinia laoreet id sed purus. Phasellus ut pharetra felis, sed accumsan leo. In at neque posuere tellus et, hendrerit eros. Maecenas ac dictum est, et egestas mi. Suspendisse massa massa, auctor id fringilla in, laoreet nec mauris.</p>
									<p>Fusce non malesuada urna. Suspendisse ac erat ut orci faucibus porta. Phasellus in libero id mi condimentum sollicitudin nec a ante. Ut dignissim iaculis sem sit amet vulputate. Quisque sed lorem odio. Vestibulum aliquet, ante ac tempor congue, libero enim vehicula dui, a viverra ligula nibh ut mi.</p>
									<p>Donec porttitor velit purus, eget blandit sem posuere vitae. Vestibulum lobortis non enim vitae porttitor. Nulla eros tortor, auctor ac eleifend tristique, tincidunt eu ligula. Vestibulum faucibus magna non dui tristique, vulputate vulputate neque dignissim. Donec euismod sem a consectetur tempus.</p>
	            </div>
	            
	             <div class="clearfix"> </div>
				</div>
				<div class="col-md-4 blog-right"> 
					<div class="get-left">
						<h3>DONOR INFORMATION</h3>
						<input type="text" value="Your Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email';}"/>
						<input type="text" value="Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name';}"/>
						<input type="text" value="Your Contact" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Contact';}"/>
						<input type="submit" id ="submit" value="Submit">
					</div>
					<h3>ACCOUNT NUMBERS</h3>
					<ul class="popular">
						<li>
							<h5> Bank</h5><span class="g"> </span>GCB<span class="h"> </span>264543498435443454
							<h5></h5><span class="g"> </span>EcoBank<span class="h"> </span>264543498435443454
						</li>
						<li><h5>Mobile Money</h5>
							<span class="g"> </span><a href="#">MTN</a><span class="h"> </span><a href="#">0248089578</a>
							<h5></h5><span class="g"> </span><a href="#">TIGO CASH</a><span class="h"> </span><a href="#">025698765</a>
						</li>
					</ul>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>

@endsection