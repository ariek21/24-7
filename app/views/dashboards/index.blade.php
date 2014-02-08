@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-sm-12">
				<div class="dashBox transparent clearfix">
						<a class="btn btn-default btn-small align-left" href="{{URL::to('dashboard/client/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_client')}}</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_tasks_form_title')}}</h2>
				<div id="tasks-ph">
					@if (isset($tasks))
					<table class="tasks-list table">
						<thead>
							<tr>
								<th>Title</th>
								<th>Description</th>
								<th>Status</th>
							<tr>
						</thead>
						<tbody>
						@foreach ($tasks as $task)
						    <tr class="{{ $task->status }}-row">
						    	<td class="item">{{ $task->title }}</td>
						    	<td class="item">{{ $task->description }}</td>
						    	<td class="item">
					    			<span class="btn">
					    				{{ $task->status }}
					    			</span>
						    	</td>
						    </tr>
						@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
				</div>

		</div>
		@if (User::isSuperAdmin())
		<div class="row">
			<div class="col-sm-8">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_clients_form_title')}}</h2>
				<div id="tasks-ph">
					@if (isset($clients))
					<table class="users-list table">
						<thead>
							<tr>

								<th>
									{{trans('app.city')}}
								</th>
								<th>
									{{trans('app.address')}}
								</th>
								<th>
									{{trans('app.contract_start')}}
								</th>
								<th>
									{{trans('app.contract_end')}}
								</th>
								<th>
									{{trans('app.package')}}
								</th>
							<tr>
						</thead>
						<tbody>
						@foreach ($clients as $client)
						    <tr class="clients-info">
						    	<td class="item">{{ $client->city }}</td>
						    	<td class="item">{{ $client->address }} {{ $client->address_number }}</td>
						    	<td class="item">{{ $client->contract_start }}</td>
						    	<td class="item">{{ $client->contract_end }}</td>
						    	<td class="item">{{ $client->package }}</td>
						    </tr>
						@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>
				</div>
		</div>
		@endif
	@stop
</div>