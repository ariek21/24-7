@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-lg-12">
				<div class="dashBox">
					<div class="controls">
						<a class="btn btn-danger btn-small" href="{{URL::to('dashboard/tasks/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_task')}}</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
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
	@stop
</div>