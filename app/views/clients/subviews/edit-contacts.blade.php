<div class="dashBox">
	<div id="contacts">
		@if ($editMode)
		<div class="form-group row">
			<div class="col-sm-12 text-left">
				<div class="dashBox-title">
					<a class=" show-new-contact-form-button text-button" href="#">
						<i class="glyphicon glyphicon-plus-sign"></i>
						{{trans('app.new_contact')}}
					</a>
					<a class=" cancel-new-contact-form-button hidden text-button" href="#">
						<i class="glyphicon glyphicon-remove-circle"></i>
						{{trans('app.cancel')}}
					</a>
					<a class=" save-new-contact-button hidden text-button" href="#">
						<i class="glyphicon glyphicon-save"></i>
						{{trans('app.add')}}
					</a>
				</div>
			</div>
		</div>
		@endif
		<div class="contacts-list">
		<div class="row">
			<div class="col-sm-2 title">{{trans('app.name')}}</div>
			<div class="col-sm-5 title">{{trans('app.email')}}</div>
			<div class="col-sm-4 title">{{trans('app.contact_phone1')}}</div>
		</div>
			@if ($contacts)
				@foreach ($contacts as $contact)
					<div class="row">
						<div class="col-sm-2">{{$contact->name}}</div>
						<div class="col-sm-5">{{$contact->email}}</div>
						<div class="col-sm-4">{{$contact->phone_1}}</div>
					</div>
				@if ($editMode)
					<div class="row">
						<div class="col-sm-12">
				    		<a href="{{ url('dashboard/client/contact/edit/'.$contact->id)}}/{{$client->id}}">{{trans('app.edit')}}</a>
				    		<a href="{{ url('dashboard/client/contact/delete/'.$contact->id)}}/{{$client->id}}">{{trans('app.delete')}}</a>
					    </div>
				    </div>
			    @endif
			    @endforeach
		    @endif
		</div>
		
	  	<div id="contacts-fields" class="hidden new-contact-form">
	  			<input type="hidden" id="save-contact-url" value="{{URL::to('dashboard/client/contact/new')}}" />
	  			<input type="hidden" id="contact-client-id" value="{{$client->id}}" />
				<div class="form-group row">
				  	<div class="col-sm-12">
					    <label for="contact-start">{{trans('app.contact_name')}}</label>
					    <input type="text" class="form-control" id="contact-name" name="contact_name" value="">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-4">
					    <label for="contact-phone-1">{{trans('app.contact_phone1')}}</label>
					    <input type="phone" class="form-control" id="contact-phone-1" name="contact_phone1" value="">
					</div>
					<div class="col-sm-4">
					    <label for="contact-phone-2">{{trans('app.contact_phone2')}}</label>
					    <input type="phone" class="form-control" id="contact-phone-2" name="contact_phone2" value="">
					</div>
					<div class="col-sm-4">
					    <label for="contact-phone-3">{{trans('app.contact_phone3')}}</label>
					    <input type="phone" class="form-control" id="contact-phone-3" name="contact_phone3" value="">
					</div>
				</div>

				<div class="form-group row">
				  	<div class="col-sm-8">
					    <label for="contact-address">{{trans('app.contact_address')}}</label>
					    <input type="text" class="form-control" id="contact-address" name="contact_address" value="">
					</div>
				  	<div class="col-sm-2">
					    <label for="contact-floor">{{trans('app.floor')}}</label>
					    <input type="number" class="form-control" id="contact-floor" name="floor" value="">
					</div>

				    <div class="col-sm-2">
					    <label for="contact-apartment-number">{{trans('app.number_of_apartment')}}</label>
					    <input type="number" class="form-control" id="contact-apartment-number" name="number_of_apartment" value="">
					</div>
				</div>

				<div class="form-group row">
				  	<div class="col-sm-12">
					    <label for="contact-email">{{trans('app.email')}}</label>
					    <input type="text" class="form-control" id="contact-email" name="contact_email" value="">
					</div>
				</div>
	  	</div>
	</div>
</div>
