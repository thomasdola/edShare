@extends('supportingHand.master')

@section('content')

@include('supportingHand.partials.header')
<!--heder end here-->
<!--contact start here-->
<div class="contact">
	<div class="container">
		<div class="contact-main">
			<h3>CONTACT US</h3>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
		</div>
	</div>
</div>
<!--contact end here-->
<!--get touch start here-->
<div class="get">
	<div class="container">
		<div class="get-main">
			  <h3>Get in Touch</h3>
			  <div class="col-md-6 get-left">
			  	 <p>Name</p>
			  	 <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			  	 <p>Email</p>
			  	 <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			  	 <p>Telephone</p>
			  	 <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
			  	 <input type="submit" value="Send">
			  </div>
			  <div class="col-md-6 get-right">
			  	<h4>Message</h4>
			  	<textarea   onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/> </textarea>
			  	
		 	  </div>
		 	<div class="clearfix"> </div>	
		</div>
	</div>
</div>
@endsection