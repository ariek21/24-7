@extends('master')
<div id="content" class="row">

	@section('content')
		@include('clients.subviews.navigation')

		{{Form::open(array('method' => 'post', 'url' => 'dashboard/client/update'))}}

			{{-- Basic form --}}
			<section class="col-sm-8">
				@include('clients.subviews.edit-basic-form', array('client' => $client))
			</section>

			{{-- left Sidebar --}}
			<section class="col-sm-4 align-left">
				<div class="dashbox">
					<div class="form-group row">
					  	<div class="col-sm-12">
						    <input type="submit" class="btn btn-success align-left btn-small" value="{{trans('app.save')}}">
						    
						</div>

					</div>
					@if ($editMode)
					<div class="row">
						<div class="col-sm-12">
						<a class="text-button" href="{{URL::to('dashboard/client/delete/'.$client->id)}}">
								<i class="glyphicon glyphicon-floppy-remove"></i>{{trans('app.delete')}}
							</a>
						</div>
					</div>
					@endif
				</div>
				@include('clients.subviews.edit-info', array('client' => $client ))
			</section>

			{{-- Toggle navigation --}}
			<section class="col-sm-8">
				<nav class="tabs">
					<a class="tab client-contacts-tab" rel="#contacts-box" href="#contacts">{{trans('app.basic_contacts')}}</a><a class="tab client-settings-tab" rel="#users-box" href="#users-box">{{trans('app.users')}}</a><a class="tab client-settings-tab" rel="#settings-box" href="#settings-box">{{trans('app.settings')}}</a>
				</nav>
			</section>


			{{-- Client users --}}
			<section class="col-sm-8 tab-content" id="users-box">
				@include('clients.subviews.edit-users', array('client'=> $client, 'clientUsers'=> $clientUsers))
			</section>

			{{-- Settings --}}
			<section class="col-sm-8 tab-content" id="settings-box">
				@include('clients.subviews.edit-settings', array('client'=> $client, 'clientUsers'=> $clientUsers))
			</section>
			{{-- Contacts --}}
			<section class="col-sm-8 tab-content" id="contacts-box">
				@include('clients.subviews.edit-contacts', array('contacts' => $contacts))
			<section>


		{{Form::close()}}
	@stop
</div>