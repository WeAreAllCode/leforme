<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends ModelBase
{
	public function items() {
    	return $this->hasMany(Item::class);
    }
}
