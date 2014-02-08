@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-sm-12">
				<div class="dashBox transparent clearfix">
						<a class="btn btn-default btn-small align-left" href="{{URL::to('dashboard/tasks/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_task')}}</a>
				</div>
			</div>
		</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="dashBox">
				<h2 class="dashBox-title">{{trans('app.all_task_form_title')}}</h2>
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
				</div>
		</div>
	</div>

	@stop
</div>
