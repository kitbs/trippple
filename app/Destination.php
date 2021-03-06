<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model {

	public function trip()
	{
		return $this->belongsTo('App\Trip', 'trip_id');
	}
	
	public function type()
	{
		return $this->belongsTo('App\TypeItem', 'type_id');
	}
	
	public function place()
	{
		return $this->belongsTo('App\Place', 'place_id');
	}

}
