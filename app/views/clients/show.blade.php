@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-lg-12">
				<div class="dashBox">
					<div class="controls">
						<a class="btn btn-danger btn-small" href="{{URL::to('dashboard/client/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_client')}}</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_single_client')}}</h2>
				<div id="users-ph">
					@if (isset($client))
					<table class="client-list table">
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
						    <tr class="{{ $client->status }}-row">
						    	<td class="item">{{ $client->city }}</td>
						    	<td class="item">{{ $client->address }} {{ $client->address_number }}</td>
						    	<td class="item">{{ $client->contract_start }}</td>
						    	<td class="item">{{ $client->contract_end }}</td>
						    	<td class="item">{{ $client->package }}</td>
						    </tr>
						</tbody>
					</table>
					@endif
				</div>
			</div>
				</div>

		</div>


	@stop
</div>