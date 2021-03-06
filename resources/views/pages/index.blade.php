@extends('layouts.default')
@section('title_page')
Home @parent
@stop

@section('active_home')
class="active"
@stop

@section('content')
	@include('includes.menu')
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class=""></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img src="{{URL::asset('resources/assets/images/slides/g8.jpg')}}">
				
				<div class="container">
				</div>

			</div>
			<div class="item">
				<img src="{{URL::asset('resources/assets/images/slides/g5.jpg')}}">
				<div class="container">
					
				</div>
			</div>
			<div class="item active">
				<img src="{{URL::asset('resources/assets/images/slides/g7.jpg')}}">
				<div class="container">
					
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		

	</div>
	<div class="jumbotron">
		<div class="container ">
			<h1 class="text-center">STAR Laravel</h1>
			<p>Lorem ipsum dolor sit amet,
			 consectetur adipisicing elit, sed do
			  eiusmod tempor incididunt ut labore 
			  et dolore magna aliqua. Ut enim ad minim veniam, 
			  quis nostrud exercitation ullamco laboris nisi ut aliquip 
			  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
			  voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
			   sint occaecat cupidatat non proident, sunt in culpa qui officia 
			   deserunt mollit anim id est laborum.</p>
		</div>
		</div>
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
				<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
				<h2>Secure Service</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipisicing elit. Sint, 
				laboriosam magni qui in non, 
				voluptatem autem sed, quasi molestias 
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				<h2>Secure Mind</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipisicing elit. Sint, 
				laboriosam magni qui in non, 
				voluptatem autem sed, quasi molestias 
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 text-center">
				<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				<h2>We are make thing...</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipisicing elit. Sint, 
				laboriosam magni qui in non, 
				voluptatem autem sed, quasi molestias 
				</p>
			</div>
		</div>


		

	@stop