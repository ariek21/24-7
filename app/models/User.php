<?php

use Illuminate\Auth\UserInterface;

class User extends Eloquent implements UserInterface{
	protected $guarded = array();

	public static $rules = array();

    public function role() {
        return $this->hasOne('Role','id','role_id');
    }

    public static function isSuperAdmin()
    {
        if (!Auth::user()) {
            return Redirect::to('login');
        }
        return User::find(Auth::user()->id)->role->title === 'Administrator';
    }

    public static function isAdmin()
    {
        return User::find(Auth::user()->id)->role->title === 'Guest';
    }

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
