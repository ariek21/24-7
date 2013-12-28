@extends('master')
<div id="content" class="row">

	@section('content')
	<div class="inner-content">
		<div>
			@include('tasks.allTasks')
		</div>

	</div>
	@stop
</div>