<div class="mothergrid">
	<div class="container">
		<div class="header">
			<div class="logo">
				<a href="{{ route('index') }}"> <h4 style="color: ">SupportingHand</h4> </a>
			</div>
			<span class="menu"> <img src="{{ asset('img/supportingHand/images/icon.png') }}" alt=""/></span>
			<div class="clear"> </div>
			<div class="navg">
				<ul class="res">
					<li><a  href="{{ action('SupportingHandController@index') }}">HOME</a></li>
					<li><a href="{{ action('SupportingHandController@posthelp') }}">POST HELP</a></li>
					<li><a href="{{ action('SupportingHandController@help_list') }}">HELPS</a></li>
					<li><a href="{{ action('SupportingHandController@instruction') }}">HOW TO HELP</a></li>
					<li><a href="{{ action('SupportingHandController@team') }}">TEAM</a></li>
					<li><a href="{{ action('SupportingHandController@gallery') }}">GALLERY</a></li>
					<li><a href="{{ action('SupportingHandController@contact') }}">CONTACT US</a></li>
				</ul>
			</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>