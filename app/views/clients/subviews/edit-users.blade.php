	<div class="dashBox">
		<div class="form-group row">
		  	<div class="col-sm-12">
				<table class="table">
		    		<thead>
		    			<tr>
		    				<th>last login</th>
		    				<th>username</th>
		    				<th>real name</th>
		    				<th>email</th>
		    				<th>status</th>
		    			</tr>
		    		</thead>
		    		<tbody>
			    @foreach($clientUsers as $user)
	    			<tr>
	    				<td>{{$user->last_login}}</td>
	    				<td>{{$user->username}}</td>
	    				<td>{{$user->real_name}}</td>
	    				<td>{{$user->email}}</td>
	    				<td>{{$user->status}}</td>
		    			</tr>
			    @endforeach
			    </tbody>
			    	</table>
			</div>
		</div>
	</div>
