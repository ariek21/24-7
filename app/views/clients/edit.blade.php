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
		{{Form::open(array('method' => 'post', 'url' => 'dashboard/client/update'))}}
		<div class="row">
			<div class="col-lg-8">
				<div class="dashBox">
					<h2 class="dashBox-title">{{trans('app.dash_client_form_title')}}</h2>

					<input type="hidden" name="id" value="{{$client->id}}">
					<div class="form-group row">
					  	<div class="col-lg-6">
						    <label for="city">{{trans('app.city')}}</label>
						    <input type="text" class="form-control" id="city" name="city" placeholder="{{trans('app.city')}}" value="{{$client->city}}">
						</div>

					    <div class="col-lg-4">
						    <label for="address">{{trans('app.address')}}</label>
						    <input type="text" class="form-control" id="address" name="address" placeholder="{{trans('app.address_ph')}}" value="{{$client->address}}">

						</div>

						<div class="col-lg-2">
						    <label for="address-number">{{trans('app.address_number')}}</label>
						    <input type="text" class="form-control" id="address-number" name="address-number" placeholder="{{trans('app.address_number_ph')}}" value="{{$client->address_number}}">

						</div>
					</div>

					<div class="form-group row">
					  	<div class="col-lg-12">
						    <input type="submit" class="btn btn-danger align-left btn-small" value="{{trans('app.save')}}">

						</div>
					</div>

			</div>
				</div>

		</div>

		<div class="row">
			<div class="col-lg-8">
				<div class="dashBox">
					<nav class="dashBox-title">
						<a href="">{{trans('app.basic_info')}}</a> |
						<a href="">{{trans('app.basic_contacts')}}</a>
					</nav>
					<div id="info">
						<div class="form-group row">
						  	<div class="col-lg-6">
							    <label for="contract-start">{{trans('app.contract_start')}}</label>
							    <input type="date" class="form-control" id="contract-start" name="contract_start" value="{{$client->contract_start}}">
							</div>

						    <div class="col-lg-6">
							    <label for="contract-end">{{trans('app.contract_end')}}</label>
							    <input type="date" class="form-control" id="contract-end" name="contract_end" value="{{$client->contract_end}}">

							</div>
						</div>
						<div class="form-group row">
						  	<div class="col-lg-6">
							    <label for="contract-number-of-floors">{{trans('app.number_of_floors')}}</label>
							    <input type="number" class="form-control" id="contract-number-of-floors" name="number_of_floors" value="{{$client->number_of_floors}}">
							</div>

						    <div class="col-lg-6">
							    <label for="number-of-apartments">{{trans('app.number_of_apartments')}}</label>
							    <input type="number" class="form-control" id="number-of-apartments" name="number_of_apartments" value="{{$client->number_of_apartments}}">
							</div>
						</div>

						<div class="form-group row">
						  	<div class="col-lg-12">
							    <label for="general-comment">{{trans('app.general_comment')}}</label>
							    <textarea class="form-control" id="general-comment" name="general_comment">{{$client->general_comment}}</textarea>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
		</form>
		{{Form::open(array('method' => 'post', 'url' => 'dashboard/client/contact/new'))}}
		<div class="row">
			<div class="col-lg-8">
				<div class="dashBox">
					<div id="contacts">
						<div class="contacts-list">
							<table class="table">
								<thead>
									<th>
										<td>1</td>
										<td>2</td>
										<td>3</td>
										<td>4</td>
										<td>5</td>
										<td>6</td>
									</th>
								</thead>
								<tbody>
								@foreach ($contacts as $contact)
									<tr>
										<td>{{ $contact->name }}</td>
										<td>{{ $contact->email }}</td>
										<td>{{ $contact->address }}</td>
										<td>{{ $contact->address_number }}</td>
										<td>{{ $contact->floor }}</td>
										<td>{{ $contact->apartment_number }}</td>
									</tr>

								@endforeach
								</tbody>
							</table>
						</div>
						<div class="form-group row">
							<div class="col-lg-12">
								<a class="btn btn-danger btn-small" id="addContactButton" href="{{URL::to('dashboard/client/contact/new')}}">
									<i class="glyphicon glyphicon-plus-sign"></i>
									{{trans('app.new_contact')}}
								</a>
							</div>
						</div>
					  	<div id="contacts-fields">
								<div class="form-group row">
								  	<div class="col-lg-12">
									    <label for="contact-start">{{trans('app.contact_name')}}</label>
									    <input type="text" class="form-control" id="contact-name" name="contact_name" value="">
									</div>
								</div>


								<div class="form-group row">
									<div class="col-lg-4">
									    <label for="contact-phone-1">{{trans('app.contact_phone1')}}</label>
									    <input type="phone" class="form-control" id="contact-phone-1" name="contact_phone1" value="">

									</div>
									<div class="col-lg-4">
									    <label for="contact-phone-2">{{trans('app.contact_phone2')}}</label>
									    <input type="phone" class="form-control" id="contact-phone-2" name="contact_phone2" value="">

									</div>
									<div class="col-lg-4">
									    <label for="contact-phone-3">{{trans('app.contact_phone3')}}</label>
									    <input type="phone" class="form-control" id="contact-phone-3" name="contact_phone3" value="">

									</div>
								</div>

								<div class="form-group row">
								  	<div class="col-lg-8">
									    <label for="contact-address">{{trans('app.contact_address')}}</label>
									    <input type="text" class="form-control" id="contact-address" name="contact_address" value="">
									</div>
								  	<div class="col-lg-2">
									    <label for="contact-floor">{{trans('app.floor')}}</label>
									    <input type="number" class="form-control" id="contact-floor" name="floor" value="">
									</div>

								    <div class="col-lg-2">
									    <label for="number-of-apartment">{{trans('app.number_of_apartment')}}</label>
									    <input type="number" class="form-control" id="number-of-apartment" name="number_of_apartment" value="">
									</div>
								</div>

								<div class="form-group row">
								  	<div class="col-lg-12">
									    <label for="contact-email">{{trans('app.email')}}</label>
									    <input type="text" class="form-control" id="contact-email" name="contact_email" value="">
									</div>
								</div>



							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		</form>
	@stop
</div>