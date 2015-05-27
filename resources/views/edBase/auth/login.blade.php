@extends('edBase.ed_end_master')


@section('style')


@endsection


@section('content')

<body class="full-lg">


	<div id="wrapper">

	<div id="loading-top">
			<div id="canvas_loading"></div>
			<span>Checking...</span>
	</div>

	<div id="main">
			<div class="container">
					<div class="row">
							<div class="col-lg-12">
							
									<div class="account-wall">
											<section class="align-lg-center">
											<div class="site-logo"></div>
											<h1 class="login-title"><span>wel</span>come</h1>
											</section>
											<form id="form-signin" class="form-signin">
													<section>
															<div class="input-group">
																	<div class="input-group-addon"><i class="fa fa-user"></i></div>
																	<input  type="text" class="form-control" name="username" placeholder="Username">
															</div>
															<div class="input-group">
																	<div class="input-group-addon"><i class="fa fa-key"></i></div>
																	<input type="password" class="form-control"  name="password" placeholder="Password">
															</div>
															<button class="btn btn-lg btn-theme-inverse btn-block" type="submit" id="sign-in">Sign in</button>
													</section>
											</form>
											<a href="#" class="footer-link">&copy; 2014 ziceinclude &trade; </a>
									</div>	
									<!-- //account-wall-->
									
							</div>
							<!-- //col-sm-6 col-md-4 col-md-offset-4-->
					</div>
					<!-- //row-->
			</div>
			<!-- //container-->
			
	</div>
	<!-- //main-->

			
	</div>
	<!-- //wrapper-->



@endsection


@section('script')

	<script type="text/javascript">
	$(function() {
			   //Login animation to center 
				function toCenter(){
						var mainH=$("#main").outerHeight();
						var accountH=$(".account-wall").outerHeight();
						var marginT=(mainH-accountH)/2;
							   if(marginT>30){
								   $(".account-wall").css("margin-top",marginT-15);
								}else{
									$(".account-wall").css("margin-top",30);
								}
					}
					toCenter();
					var toResize;
					$(window).resize(function(e) {
						clearTimeout(toResize);
						toResize = setTimeout(toCenter(), 500);
					});
					
				//Canvas Loading
				  var throbber = new Throbber({  size: 32, padding: 17,  strokewidth: 2.8,  lines: 12, rotationspeed: 0, fps: 15 });
				  throbber.appendTo(document.getElementById('canvas_loading'));
				  throbber.start();
				  
				//Set note alert
				setTimeout(function () { 
					$.notific8('Hi Guest , you can use Email and Password to access your account.',{ sticky:true, horizontalEdge:"top", theme:"inverse" ,heading:"LOGIN USER"}) 
					}, 1000);
		
				
				$("#form-signin").submit(function(event){
						event.preventDefault();
						var main=$("#main");
						//scroll to top
						main.animate({
							scrollTop: 0
						}, 500);
						main.addClass("slideDown");		
						
						// send username and password to php check login
						$.ajax({
							url: "{{ route('login') }}",
							 data: $(this).serialize(),
							 type: "POST", 
							 dataType: 'json',
							success: function (e) {
									setTimeout(function () { main.removeClass("slideDown") }, !e.status ? 500:3000);
									 if (!e.status) { 
										 $.notific8('Check Username or Password again !! ',{ life:5000,horizontalEdge:"bottom", theme:"danger" ,heading:" ERROR :); "});
										return false;
									 }
									 setTimeout(function () { $("#loading-top span").text("Yes, account is access...") }, 500);
									 setTimeout(function () { $("#loading-top span").text("Redirect to account page...")  }, 1500);
									 setTimeout( "window.location.href='dashboard.html'", 3100 );
							}
						});	
				
				});
		});
	</script>

@endsection