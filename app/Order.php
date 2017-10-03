<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends ModelBase
{
    public function users() {
    	return $this->belongsTo(User::class);
    }
}
