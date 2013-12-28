@extends('master')
<div id="content" class="row">

	@section('content')
	<div class="inner-content">
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
	@stop
</div>
