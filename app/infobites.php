<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class infobites extends Model
{
    public function owner(){
    	return $this->morphTo();
    }


}
