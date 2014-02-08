@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-sm-12">
				<div class="dashBox">
					<div class="controls">
						<a class="btn btn-danger btn-small" href="{{URL::to('dashboard/tasks/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_client')}}</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_client_form_title')}}</h2>
				<div id="users-ph">
					@if (isset($clients))
					<table class="users-list table">
						<thead>
							<tr>
								<th>{{trans('app.username')}}</th>
								<th>{{trans('app.email')}}</th>
								<th>{{trans('app.address')}}</th>
								<th>{{trans('app.address')}}</th>
								<th>{{trans('app.username')}}</th>
							<tr>
						</thead>
						<tbody>
						@foreach ($clients as $client)
						    <tr class="{{ $client->status }}-row">
						    	<td class="item">{{ $client->username }}</td>
						    	<td class="item">{{ $client->email }}</td>
								<td class="item"></td>
						    </tr>
						@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
				</div>

		</div>
	@stop
</div>