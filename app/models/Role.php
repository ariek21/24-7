<?php

class Role extends Eloquent {
 	protected $table = 'roles';

	public function user()
    {
        return $this->belongsTo('User','id', 'role_id');
    }

}
