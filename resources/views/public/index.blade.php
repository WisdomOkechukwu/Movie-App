
<!DOCTYPE html>

<html lang="en" class="no-js">

<!-- index14:58-->
<head>
	<!-- Basic need -->
	<title>Open Pediatrics</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> 

    <link rel="stylesheet" href="{{ 'assets/css/style.css' }}">
	<link rel="stylesheet" href="{{ 'assets/css/plugins.css' }}">

</head>
<body>
    <div class="login-wrapper" id="login-content">
        <div class="login-content">
            <h3>Logout</h3>
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <div class="row">
                    <div class="social-btn-2">
                        
                        <button type="submit" class="tw" href="#">Logout</button>
                    </div>
                </div>  
            </form>
            
        </div>
    </div>

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
                        <a href="{{ route('home') }}"><img class="logo" src="{{ asset('assets/images/logo1.png') }}" alt="" width="119" height="58"></a>
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
                            @auth
                                
                           
                            <li class="dropdown first">
                                <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                {{ auth()->user()->name }} 
                                @if (session('cart'))
                                <span class="badge badge-light">
                                    {{ session('cart') }}
                                </span>
                                @endif
                                </a>
                                <ul class="dropdown-menu level1">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="{{ route('cartlist') }}">View Cart</a></li>
                                    <li><a href="#">Previous Purchase</a></li>
                                    <li class="loginLink"><a href="#">LOG OUT</a></li> 
                                </ul>	
                            </li>   
                            @endauth      
                          
                            @guest
                                
                            <style>
                            .signLink{
                                background-color: rgb(175, 70, 70);
                                padding-left: 5px;
                                padding-right: 5px;
                                border-radius: 25px;
                            }
                            </style>
                            
                            <li ><a href="{{ route('login') }}">LOG In</a></li>
                            <li class="signLink"><a href="{{ route('register') }}">sign up</a></li>
                            
                            @endguest
                            
    
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

<!-- BEGIN | Header -->

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





<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				<a href="index-2.html"><img class="logo" src="assets/images/logo1.png" alt=""></a>
				<p>5th Avenue st, manhattan<br>
				New York, NY 10001</p>
				<p>Call us: <a href="#">(+01) 202 342 6789</a></p>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="#">About</a></li> 
					<li><a href="#">Blockbuster</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Help Center</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item3">
				<h4>Legal</h4>
				<ul>
					<li><a href="#">Terms of Use</a></li> 
					<li><a href="#">Privacy Policy</a></li>	
					<li><a href="#">Security</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">Watchlist</a></li>	
					<li><a href="#">Collections</a></li>
					<li><a href="#">User Guide</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item5">
				<h4>Newsletter</h4>
				<p>Subscribe to our newsletter system now <br> to get latest news from us.</p>
				<form action="#">
					<input type="text" placeholder="Enter your email...">
				</form>
				<a href="#" class="btn">Subscribe now <i class="ion-ios-arrow-forward"></i></a>
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/plugins2.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

<script src="{{ 'assets/js/jquery.js' }}"></script>
<script src="{{ 'assets/js/plugins.js' }}"></script>
<script src="{{ 'assets/js/plugins2.js' }}"></script>
<script src="{{ 'assets/js/custom.js' }}"></script>

</body>

<!-- index14:58-->
</html>