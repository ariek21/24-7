@extends('master')
<div id="content" class="row">

	@section('content')
		<div class="row">
			<div class="col-sm-12">
				<div class="dashBox">
					<div class="controls">
						<a class="btn btn-danger btn-small" href="{{URL::to('dashboard/client/new')}}">
							<i class="glyphicon glyphicon-plus-sign"></i>{{trans('app.new_client')}}</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_client_form_title')}}</h2>
					{{Form::open(array('method' => 'post', 'url' => 'dashboard/clients/new'))}}
					<div class="form-group row">
					  	<div class="col-sm-6">
						    <label for="city">{{trans('app.city')}}</label>
						    <input type="text" class="form-control" id="city" name="city" placeholder="{{trans('app.city')}}">
						</div>

					    <div class="col-sm-4">
						    <label for="address">{{trans('app.address')}}</label>
						    <input type="text" class="form-control" id="address" name="address" placeholder="{{trans('app.address_ph')}}">

						</div>

						<div class="col-sm-2">
						    <label for="address-number">{{trans('app.address_number')}}</label>
						    <input type="text" class="form-control" id="address-number" name="address-number" placeholder="{{trans('app.address_number_ph')}}">

						</div>
					</div>

					<div class="form-group row">
					  	<div class="col-sm-12">
						    <input type="submit" class="btn btn-danger align-left btn-small" value="{{trans('app.save')}}">

						</div>
					</div>
					</form>
			</div>
				</div>

		</div>
	@stop
</div>