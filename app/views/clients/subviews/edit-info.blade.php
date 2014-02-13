<div class="dashBox">
	<div id="info">
		<div class="form-group row">
		  	<div class="col-sm-6">
		  		@if ($editMode)
			    <label for="contract-start">{{trans('app.contract_start')}}</label>
			    <input type="date" class="form-control" id="contract-start" name="contract_start" value="{{$client->contract_start}}">
			    @else
			    	<p>{{trans('app.contract_start')}}: <br>{{$client->contract_start}}</p>
			    @endif
			</div>

		    <div class="col-sm-6">
		    	@if ($editMode)
			    <label for="contract-end">{{trans('app.contract_end')}}</label>
			    <input type="date" class="form-control" id="contract-end" name="contract_end" value="{{$client->contract_end}}">
			    @else
			    	<p>{{trans('app.contract_end')}}: <br> {{$client->contract_end}}</p>
			    @endif
			</div>
		</div>
		<div class="form-group row">
		  	<div class="col-sm-6">
		  		@if ($editMode)
			    <label for="contract-number-of-floors">{{trans('app.number_of_floors')}}</label>
			    <input type="number" class="form-control" id="contract-number-of-floors" name="number_of_floors" value="{{$client->number_of_floors}}">
				@else
					<p>{{trans('app.number_of_floors')}}: {{$client->number_of_floors}}</p>
				@endif
			</div>

		    <div class="col-sm-6">
		    	@if ($editMode)
			    <label for="number-of-apartments">{{trans('app.number_of_apartments')}}</label>
			    <input type="number" class="form-control" id="number-of-apartments" name="number_of_apartments" value="{{$client->number_of_apartments}}">
				@else
					<p>{{trans('app.number_of_apartments')}}: {{$client->number_of_apartments}}</p>
				@endif
			</div>
		</div>
		<div class="form-group row">
		  	<div class="col-sm-12">
		  		@if ($editMode)
			    <label for="general-comment">{{trans('app.general_comment')}}</label>
			    <textarea class="form-control" id="general-comment" name="general_comment">{{$client->general_comment}}</textarea>
				@else
					<p>{{trans('app.general_comment')}}: <br> {{$client->general_comment}}</p>
				@endif
			</div>
		</div>
		{{-- leonid: adding input field --}}
		<div class="form-group row">
		  	<div class="col-sm-12">
		  		@if ($editMode)
			    <label for="general-comment">{{trans('app.special_things')}}</label>
			    <textarea class="form-control" id="special-things" name="special-things">{{$client->things}}</textarea>
				@else
					<p>{{trans('app.special_things')}}: <br> {{$client->things}}</p>
				@endif
			</div>
		</div>
	</div>
</div>