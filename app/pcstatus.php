<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pcstatus extends Model
{
     /**
	 * [$table description]
	 * @var string
	 */
    protected $table = 'pc_status';
    
    /**
     * [$filltable description]
	 * @var [type]
     */
    protected $filltable = [
    	'id','status'
    ];
}
