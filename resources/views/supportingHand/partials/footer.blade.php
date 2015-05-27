
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="footer-navg">
				<ul>
					<li><a  href="{{ action('SupportingHandController@index') }}">HOME</a></li>
					<li><a href="{{ action('SupportingHandController@posthelp') }}">POST HELP</a></li>
					<li><a href="{{ action('SupportingHandController@help_list') }}">HELPS</a></li>
					<li><a href="{{ action('SupportingHandController@instruction') }}">HOW TO HELP</a></li>
					<li><a href="{{ action('SupportingHandController@team') }}">TEAM</a></li>
					<li><a href="{{ action('SupportingHandController@gallery') }}">GALLERY</a></li>
					<li><a href="{{ action('SupportingHandController@contact') }}">CONTACT US</a></li>
				</ul>
			</div>
			<div class="footer-top">
				
				<div class="col-md-4 footer-right">
					<h3>Contact us</h3>
					<p>Address : Richard McClintock</p>
					<p>New Street : Letraset sheets</p>
					<p>ph : 5240-2948-600</p>
				</div>
			<div class="clearfix"> </div>
			</div>
			
		<div class="clearfix"> </div>

<script src="{{ asset('js/supportingHand/all_js.min.js') }}"></script>

			<script type="text/javascript">
				$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
					*/
					
					$().UItoTop({ easingType: 'easeOutQuart' });

						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});

						$( "span.menu").click(function() {
						  $(  "ul.res" ).slideToggle("slow", function() {
						   // Animation complete.
						   });
						   });

							$('.popup-with-zoom-anim').magnificPopup({
								type: 'inline',
								fixedContentPos: false,
								fixedBgPos: true,
								overflowY: 'auto',
								closeBtnInside: true,
								preloader: false,
								midClick: true,
								removalDelay: 300,
								mainClass: 'my-mfp-zoom-in'
						});
					
				});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>
	</div>
</div>