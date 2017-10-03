<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends ModelBase
{
    public function items() {
    	return $this->belongsToMany(Item::class);
    }
}
