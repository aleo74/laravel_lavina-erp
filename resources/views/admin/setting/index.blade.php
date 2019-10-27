@extends('layouts.admin')

@section('content')

	@include('includes.message')

	<h1>User</h1>
	<div class="container">
	<table class="table table-bordered table-striped">
		<thead>
		  <tr>
			<th>Id</th>
			<th>Key</th>
			<th>Description</th>
			<th>Display name</th>
			<th>Value</th>
			<th>Details</th>
			<th>Type</th>
			<th>Order</th>
			<th>Group</th>
		  </tr>
		</thead>

		<tbody>
		@if($settings)
			@foreach($settings as $setting)
			  <tr>
				<td>{{$setting->id}}</td>
				<td>{{$setting->key}}</td>
				<td>{{$setting->display_name}}</td>
				<td>{{$setting->value}}</td>
				<td>{{$setting->details}}</td>
				<td>{{$setting->type}}</td>
				<td>{{$setting->order}}</td>
				<td>{{$setting->group}}</td>
			  </tr>
			@endforeach
		@endif
		</tbody>
	</table>
	</div>
@stop

@section('scripts')
<script>
</script>
@stop

