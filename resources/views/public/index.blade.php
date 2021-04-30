@extends('layout.layout')

@section('content')

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

@endsection




