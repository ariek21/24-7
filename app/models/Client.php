<?php

class Client extends Eloquent {
	protected $table = 'clients';

	public function clientUsers() {
        return $this->hasMany('ClientUsers');
    }
}
