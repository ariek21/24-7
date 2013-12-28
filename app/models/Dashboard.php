<?php

class Dashboard extends Eloquent {
	protected $table = 'tasks';

	public function user()
    {
        return $this->belongsTo('User');
    }

}
