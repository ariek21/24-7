<input type="hidden" name="id" value="{{$client->id}}">

<div class="dashBox">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="dashBox-title">{{trans('app.dash_client_form_title')}}</h2>
		</div>
	</div>

	<div class="form-group row">
	@if ($editMode)
	  	<div class="col-sm-6">
			    <label for="city">{{trans('app.city')}}</label>
			    <input type="text" class="form-control" id="city" name="city" placeholder="{{trans('app.city')}}" value="{{$client->city}}">
		    	
		</div>
	    <div class="col-sm-4">
			    <label for="address">{{trans('app.address')}}</label>
		    	<input type="text" class="form-control" id="address" name="address" placeholder="{{trans('app.address_ph')}}" value="{{$client->address}}">
		</div>

		<div class="col-sm-2">
		    <label for="address-number">{{trans('app.address_number')}}</label>
		    <input type="text" class="form-control" id="address-number" name="address-number" placeholder="{{trans('app.address_number_ph')}}" value="{{$client->address_number}}">
		</div>
    @else 
		<div class="col-sm-12">
			<h3>{{$client->city}}, {{$client->address}} {{$client->address_number}}</h3>
		</div>
	@endif
	</div>
</div>
