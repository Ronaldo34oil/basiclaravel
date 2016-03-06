@extends('layouts.default')
@section('title_page')
Product-list  @parent
@stop

@section('content')
	@include('includes.menu')
	<div class="jumbotron">
		<div class="container ">
			<h1 class="text-center">Product({{$data_cnt}})</h1>
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
		{!!$data_product->render()!!}
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>ProductName</th>
					<th>Price</th>
					<th>MenuID</th>
					<th>CategoryName</th>
					<th>Menuname</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($data_product as $data)
			                    {{$count=$count+1}}
				<tr>
					<td>{{$count}}</td>
					<td>{{$data->prdname}}</td>
					<td>{{$data->price}}</td>
					<td>{{$data->menufac_id}}</td>
					<td>{{$data->categoryname}}</td>
					<td>{{$data->menufacname}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$data_product->render()!!}
		</div>
	@stop