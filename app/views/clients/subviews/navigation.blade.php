<section class="row">
	<div class="col-sm-12">
		<div class="dashBox">
			<div class="controls">
				<a class="btn btn-default btn-small" href="{{URL::to('dashboard/clients')}}">
					<i class="glyphicon glyphicon-chevron-right"></i>{{trans('app.back')}}</a>
				<a class="btn btn-default btn-small" href="{{URL::to('dashboard/client/new')}}">
					<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_client')}}</a>
				@if ($client)
					@if ($name == 'clients-show')
					<a class="btn btn-default btn-small" href="{{URL::to('dashboard/client/edit/'.$client->id)}}">
						<i class="glyphicon glyphicon-edit"></i>{{trans('app.edit')}}</a>
					
					
					@endif

					
				@endif
			</div>
		</div>
	</div>
</section>