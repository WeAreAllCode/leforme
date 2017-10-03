<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends ModelBase
{
	public function items() {
    	return $this->belongsToMany(Item::class);
    }
}
