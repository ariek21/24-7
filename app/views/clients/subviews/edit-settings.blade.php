	<div class="dashBox">
		<div class="form-group row">
		  	<div class="col-sm-12">

			    @foreach($clientUsers as $user)
			    	<div>{{$user->username}}</div>
			    @endforeach
			</div>
		</div>
	</div>
