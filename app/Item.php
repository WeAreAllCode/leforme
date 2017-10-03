<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends ModelBase
{
	/* MANY ITEMS BELONGS TO MANY SIZES */
	public function sizes() {
    	return $this->belongsToMany(Size::class);
    }

    /* MANY ITEMS BELONGS TO MANY CATEGORIES  */
    public function categories() {
    	return $this->belongsToMany(Category::class);
    }

    /* MANY ITEM BELONGS TO MANY LOCATIONS */
    public function locations() {
    	return $this->belongsToMany(Location::class);
    }

    /* ONE ITEM BELONGS TO A COMPANY */
	public function companies() {
    	return $this->belongsTo(Company::class);
    }

}
