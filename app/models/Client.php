<?php

class Client extends Eloquent {
	protected $table = 'clients';

	protected $guarded = array();

	public static $rules = array();
}
