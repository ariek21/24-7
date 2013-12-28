<?php

class Login extends Eloquent {
	protected $table = 'users';
	protected $guarded = array('id','password');

	public static $rules = array();
	public static $errors = array();

}
