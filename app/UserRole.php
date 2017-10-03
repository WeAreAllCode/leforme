<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends ModelBase
{
    public function users() {
    	return $this->hasMany(User::class);
    }
}
