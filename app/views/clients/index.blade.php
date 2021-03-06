@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-sm-12">
				<div class="dashBox transparent clearfix">
						<span class="searchbox">
							<span class="form-group">
								<input type="search" name="search" results="5"/>
							</span>
						</span>
						<a class="btn btn-default btn-small align-left" href="{{URL::to('dashboard/client/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.createNewUser')}}</a>
						
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_client_form_title')}}</h2>
				<div id="clients-ph" class="scrollable">
					@if (isset($clients))
					<table class="users-list table">
						<thead>
							<tr>

								<th>
									<a href ="{{ url('dashboard/clients/city/'.$order)}}">{{trans('app.city')}}</a>
								</th>
								<th>
									<a href ="{{ url('dashboard/clients/address/'.$order)}}">{{trans('app.address')}}</a>
								</th>
								<th>
									<a href ="{{ url('dashboard/clients/contract_start/'.$order)}}">{{trans('app.contract_start')}}</a>
								</th>
								<th>
									<a href ="{{ url('dashboard/clients/contract_end/'.$order)}}">{{trans('app.contract_end')}}</a>
								</th>
								<th>
									{{trans('app.package')}}
								</th>
							<tr>
						</thead>
						<tbody>
						@foreach ($clients as $client)
						    <tr class="clients-info editable-row">
						    	<td class="item">{{ $client->city }}</td>
						    	<td class="item">
						    		<a href="{{ url('dashboard/client/show/'.$client->id)}}">{{ $client->address }} {{ $client->address_number }}</a>
						    	</td>
						    	<td class="item">{{ $client->contract_start }}</td>
						    	<td class="item">{{ $client->contract_end }}</td>
						    	<td class="item">{{ $client->package }}</td>
						    </tr>
						    <tr class="controls">
						    	<td colspan="5">
						    		<a href="{{ url('dashboard/client/edit/'.$client->id)}}">{{trans('app.edit')}}</a>
						    		<a href="{{ url('dashboard/client/delete/'.$client->id)}}">{{trans('app.delete')}}</a>
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