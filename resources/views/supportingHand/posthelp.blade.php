@extends('supportingHand.master')


@section('content')


	@include('supportingHand.partials.header')


	<div class="contact">
		<div class="container">
			
		</div>
	</div>
	<!--contact end here-->
	<!--get touch start here-->
	<div class="get">
		<div class="container">
			<div class="get-main">
				  <form action="action" method="post" accept-charset="utf-8">
				  	
				  		  <h3>Details of the help</h3>
				  		  <div class="col-md-6 get-left">
				  		  	 <p>Title</p>
				  		  	 <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required/>
				  		  	 <div id="image-preview">
				  		  	   <label for="image-upload" id="image-label"></label>
				  		  	   <input type="file" name="image" id="image-upload"/>
				  		  	 </div>
				  	  	 	<input type="submit" value="Next">
				  		  </div>
				  		  <div class="col-md-6 get-right">
				  		  	<h4>Description</h4>
				  		  	<textarea   onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/ required> </textarea>
				  		  	<h4>Importance of Help</h4>
				  		  	<textarea   onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/ required> </textarea>
				  	 	  </div>

				  </form>

			 	<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--get touch end here-->



@endsection