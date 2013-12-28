@extends('master')
<div id="content" class="row">

@section('content')
<div class="inner-content">
  <div class="row">
      <div class="col-lg-12">
      		<div class="dashBox">
				{{trans('app.welcome')}}
      		</div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-8 form">
      		<div class="dashBox">
				<h2 class="dashBox-title">{{trans('app.new_task_form_title')}}</h2>
					{{Form::open(array('method' => 'post', 'role'=>'form'))}}
					  <div class="form-group row">
					  	<div class="col-lg-6">
					  		<div>
							  	<label for="exampleInputEmail1">{{trans('app.category')}}</label>
							  </div>
					  	<select class="selectpicke show-menu-arrowr" data-live-search="true" title='Choose one of the following...'>
			                  <optgroup label="{{trans('app.casual')}}">
							      <option>{{trans('app.cleaning')}}</option>
							      <option>{{trans('app.garden')}}</option>
							      <option>{{trans('app.lobby')}}</option>
							      <option>{{trans('app.elevator')}}</option>
							  </optgroup>
							  <optgroup label="{{trans('app.services')}}">
							      <option>{{trans('app.infrastructure')}}</option>
							      <option>{{trans('app.service')}}</option>
							  </optgroup>
			                </select>
			         </div>
			         <div class="col-lg-6">
			         	<div>
							  <label for="exampleInputEmail1">{{trans('app.priority')}}</label>
							  </div>
			         	<div class="btn-group">
			         		<input type="hidden" name="priority" id="priority">
							<button class="btn btn-danger btn-small">{{trans('app.normal_priority')}}</button>
							<button class="btn btn-inverse btn-small">{{trans('app.medium_priority')}} </button>
							<button class="btn btn-danger btn-small">{{trans('app.high_priority')}} </button>
							<button class="btn btn-danger btn-small">{{trans('app.emergency_priority')}} </button>
						</div>
			         </div>
					  </div>

					  <div class="form-group row">

					  	<div class="col-lg-6">
					  		 <label for="exampleInputEmail1">{{trans('app.name')}}</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="@if (Auth::check()){{Auth::user()->username}}@endif">
					  	</div>
					  	<div class="col-lg-6">
					  		<label for="exampleInputPassword1">{{trans('app.email')}}</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{trans('app.email_example')}}">
					  	</div>
					  </div>


					  <div class="form-group row">
					  	<div class="col-lg-12">
					    <label for="exampleInputPassword1">{{trans('app.subject')}}</label>
					    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{trans('app.enter_subject')}}">
					</div>
					  </div>

					  <div class="form-group row">
					  	<div class="col-lg-12">
					    <label for="exampleInputPassword1">{{trans('app.description')}}</label>
					    <textarea class="form-control" rows="3"></textarea>

					  	</div>
					  </div>
					<div class="form-group row">
						<div class="col-lg-12">
						  <button type="submit" class="btn btn-default">{{trans('app.send')}}</button>

						</div>
					</div>
					</form>
			</div>
</div>
      <div class=" col-lg-6"></div>
  </div>
</div>
@stop
</div>
