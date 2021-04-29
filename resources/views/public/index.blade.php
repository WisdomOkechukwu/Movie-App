@extends('layout.layout')

@section('content')

<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="index-2.html"><img class="logo" src="assets/images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						{{-- <li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
							Home <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="index-2.html">Home 01</a></li>
								<li><a href="homev2.html">Home 02</a></li>
								<li><a href="homev3.html">Home 03</a></li>
							</ul>
						</li> --}}
						>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						{{-- <li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.html">Landing</a></li>
								<li><a href="404.html">404 Page</a></li>
								<li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
							</ul>
						</li> --}}
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							Wisdom OKechukwu <span class="badge badge-light">2</span>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.html">Landing</a></li>
								<li><a href="404.html">404 Page</a></li>
								<li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
							</ul>	
						</li>                
						
						{{-- <li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li> --}}

						

					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
	    </div>
	</div>
</header>
<!-- END | Header -->

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">
				{{-- Outputing all database movies to the slider --}}
				@foreach ($movie as $movies )
				
					
					<div class="movie-item">
						<div class="mv-img">
							<a href="#"><img src="{{ $movies->picture }}" alt="" width="285" height="437"></a>
						</div>
						<div class="title-in">
							<div class="cate">
								<span class=@if ($movies->genre == "Action")
									{{ "yell" }}
								@endif
								
								@if ($movies->genre == "Adventure")
									{{ "orange" }}
								@endif
								
								@if ($movies->genre == "SciFi")
									{{ "blue" }}
								@endif><a href="">{{ $movies->genre }}</a></span>
							</div>
							<h6><a href="/edit/{{ $movies->id }}">{{ $movies->name }}</a></h6>
							<p><i class="ion-android-star"></i><span>{{ $movies->rating }}</span> /10</p>
						</div>
					</div>
					
				@endforeach
	    		
				
	    	</div>
	    </div>
	</div>
</div>


<div class="movie-items  full-width">
	<div class="row">
		<div class="col-md-12">
			<div class="title-hd">
				<h2>Genres</h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links">
					<li class="active"><a href="#tab1-h2">Action</a></li>
						                       
				</ul>
			    <div class="tab-content">
			        <div id="tab1-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								@foreach ($movie as $movies )
								{{-- if stament to output only the Action genre --}}
								@if ($movies->genre =="Action")
									<div class="slide-it">
										<div class="movie-item">
											<div class="mv-img">
												<img src="{{ $movies->picture }}" alt="">
											</div>
											<div class="hvr-inner">
												<a  href="/edit/{{ $movies->id }}"> View more <i class="ion-android-arrow-dropright"></i> </a>
											</div>
											<div class="title-in">
												<h6><a href="#">{{ $movies->name }}</a></h6>
												<p><i class="ion-android-star"></i><span>7.4</span> /10</p>
											</div>
										</div>
									</div>
								@endif
										
								@endforeach
			            		
								
			            	</div>
			            </div>
			        </div>
			        
			       
			    </div>
			</div>
			<div class="title-hd">
				<h2></h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links-2">
					<li class="active"><a href="#tab21-h2">Adventure</a></li>                       
				</ul>
				
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								@foreach ($movie as $movies)
								{{-- if stament to output only the Adventure genre --}}
									@if ($movies->genre =="Adventure")
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="{{ $movies->picture }}" alt="">
												</div>
												<div class="hvr-inner">
													<a  href="/edit/{{ $movies->id }}"> View more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">{{ $movies->name }}</a></h6>
													<p><i class="ion-android-star"></i><span>{{ $movies->rating }}</span> /10</p>
												</div>
											</div>
										</div>
									@endif
								@endforeach
			            	</div>
			            </div>
			        </div>
			        
			    </div>
				
			</div>

			<div class="title-hd">
				<h2></h2>
				<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
			</div>
			<div class="tabs">
				<ul class="tab-links-2">
					<li class="active"><a href="#tab21-h2">Sci-Fi</a></li>                       
				</ul>
				
			    <div class="tab-content">
			        <div id="tab21-h2" class="tab active">
			            <div class="row">
			            	<div class="slick-multiItem2">
								@foreach ($movie as $movies)
								{{-- if stament to output only the SCI FI genre --}}
									@if ($movies->genre =="SciFi")
										<div class="slide-it">
											<div class="movie-item">
												<div class="mv-img">
													<img src="{{ $movies->picture }}" alt="">
												</div>
												<div class="hvr-inner">
													<a  href="/edit/{{ $movies->id }}"> View more <i class="ion-android-arrow-dropright"></i> </a>
												</div>
												<div class="title-in">
													<h6><a href="#">{{ $movies->name }}</a></h6>
													<p><i class="ion-android-star"></i><span>{{ $movies->rating }}</span> /10</p>
												</div>
											</div>
										</div>
									@endif
								@endforeach
			            	</div>
			            </div>
			        </div>
			        
			    </div>
				
			</div>v

		</div>
	</div>
</div>

@endsection




