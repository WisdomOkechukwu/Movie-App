@extends('layout.layout')

@section('content')


	

<div class="hero common-hero">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Your Cart Details</h1>
					<ul class="breadcumb">
						<li class="active"><a href="{{ route('home') }}">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> Cart listing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				
				<div class="flex-wrap-movielist mv-grid-fw">
					@php
						$addition = 0;
					@endphp
					@foreach ($cartsetails as $key )
						@php
							
							$addition = $addition+$key->price;
						@endphp
						<div class="movie-item-style-2 movie-item-style-1">
							<img src="{{ asset("$key->picture") }}" alt="">
							<div class="hvr-inner">
	            				<a  href="/cartdel/{{ $key->id }}">Delete Movie	<i class="ion-android-arrow-dropright"></i> </a>
	            			</div>
							<div class="mv-item-infor">
								<h6><a href="#">{{ $key->name }}</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>{{ $key->rating }}</span> /10</p>
							</div>
						</div>
						@endforeach
						
				</div>
				<div><a href="{{ route('purchase') }}" class="item item-1 redbtn"></i> Purchase ${{ $addition }}.00</a></div>		
				
			</div>
		</div>
	</div>
</div>
@endsection