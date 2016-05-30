@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<h2>All Connect Messages</h2>
		
		@if($connects)
		<table class="table">
			<thead>
				<tr>
					<th><h5>Name</h5></th>
					<th><h5>Email</h5></th>
					<th><h5>Phone</h5></th>
					<th><h5>Message</h5></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($connects as $connect)
				<tr>
					<td><h5>{{ $connect->name }}</h5></td>
					<td><h5>{{ $connect->email }}</h5></td>
					<td><h5>{{ $connect->phone }}</h5></td>
					<td><h5>{{ $connect->message }}</h5></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		@else
		<div class="well">
			<p>No Message</p>
		</div>
		@endif
		
		
	</div>
</div>
@stop