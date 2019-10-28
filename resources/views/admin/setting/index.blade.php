@extends('layouts.admin')

@section('content')

	@include('includes.message')

	<h1>Settings</h1>
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
        <div class="alert alert-info">
            <strong>How to use :</strong>
            <p>You can obtaint the value of any setting everywhere on the ERP, with <code>Helpers::setting('site.title')</code></p>
        </div>
	</div>
@stop

@section('scripts')
<script>
</script>
@stop

