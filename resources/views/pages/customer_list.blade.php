@extends('layouts.default')
@section('title_page')
Customer-list  @parent
@stop

@section('content')
	@include('includes.menu')
	<div class="jumbotron">
		<div class="container ">
			<h1 class="text-center">Customer({{$data_count}})</h1>
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
		{!!$data_customer->render()!!}
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>City</th>
					<th>Phone Number</th>
					<th>Zip</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($data_customer as $data)
				<tr>
					<td>{{$data->customerNumber}}</td>
					<td>{{$data->contactLastName}}</td>
					<td>{{$data->contactFirstName}}</td>
					<td>{{$data->city}}</td>
					<td>{{$data->phone}}</td>
					<td>{{$data->postalCode}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$data_customer->render()!!}
		</div>
	@stop