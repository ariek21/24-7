<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface{
	protected $guarded = array();

	public static $rules = array();

	/**
    * Get the unique identifier for the user.
    *
    * @return mixed
    */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
    * Get the password for the user.
    *
    * @return string
    */
    public function getAuthPassword()
    {
        return $this->password;
    }


}
