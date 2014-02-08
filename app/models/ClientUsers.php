<?php

class ClientUsers extends Eloquent {
	protected $table = 'client_users';

	public function client()
    {
        return $this->belongsTo('Client','id', 'client_id');
    }

}
